<?php

namespace App\Services;

use App\Models\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\MessageBag;

class PackageInstaller
{
    public $package;
    public $slug;
    public $namespace;
    public $path;
    public $migrations;
    // public $licence;

    public function __construct(Request $request, array $installable)
    {
        $this->package = array_merge($installable, $request->all());
        $this->slug = $installable['slug'];
        // $this->licence = $request->input('license_key');
        $this->namespace = '\Incevio\Package\\' . Str::studly(Str::replace('-', '_', $this->slug));
        $this->path = $installable['path'];
        $this->migrations = str_replace(base_path(), '', $this->path . '/database/migrations');
    }

    public function install()
    {
        Log::info('Installing package ' . $this->slug);

        try {
            $package_data = array_merge($this->package, preparePackageInstallation($this->package));

            Package::create($package_data);

            $this->migrate()->seed();
        } catch (\Exception $exception) {
            Log::info('Package installation failed ' . $this->slug);
            Log::error(get_exception_message($exception));

            throw new \Exception('Package Installation Failed ' . $this->slug);
        }

        Log::info('Successfully installed package ' . $this->slug);

        return true;
    }

    private function migrate()
    {
        Log::info('Migration started for ' . $this->slug);

        Artisan::call('migrate', ['--path' => $this->migrations, '--force' => true]);

        Log::info(Artisan::output());

        return $this;
    }

    private function seed()
    {
        Log::info('Seeding package data for ' . $this->slug);

        foreach (glob($this->path . '/database/seeds/*.php') as $filename) {
            // Load all classes before including the seeder class
            $classes = get_declared_classes();

            // Includ the seeder class
            include $filename;

            // Get the migration class
            $temp = array_diff(get_declared_classes(), $classes);
            $migration = Arr::last($temp, function ($value, $key) {
                return $value !== 'Illuminate\\Database\\Seeder';
            });

            Artisan::call('db:seed', ['--class' => $migration, '--force' => true]);

            Log::info(Artisan::output());
        }

        return $this;
    }

    public function uninstall()
    {
        Log::info('Uninstalling Package: ' . $this->slug);

        $file = $this->path . '/src/Uninstaller.php';

        if (file_exists($file)) {
            include $file;
        }

        $class = $this->namespace . '\Uninstaller';

        // If uninstaller not defined return true
        if (!class_exists($class)) {
            Log::info('Uninstaller not found in the package dir for ' . $this->slug);

            throw new \Exception('Uninstaller not found for the package ' . $this->slug);
        }

        try {
            // Clearing packge seeds
            (new $class())->cleanDatabase();

            $this->rollback();
        } catch (\Exception $e) {
            Log::info('Package uninstallation failed: ' . $this->slug);

            throw new \Exception('Uninstallation failed: ' . $this->slug);
        }

        Log::info('Successfully uninstalled package ' . $this->slug);

        return $this;
    }

    private function rollback()
    {
        Log::info('Roll back called...');

        $migrations = array_reverse(glob($this->path . '/database/migrations/*_*.php'));

        if (empty($migrations)) {
            Log::info('No migration to roll back for package ' . $this->slug);

            return $this;
        }

        foreach ($migrations as $filename) {

            $migration = str_replace('.php', '', basename($filename));

            Log::info('Rolling back: ' . $migration);

            // Get the migration record 
            $row = DB::table('migrations')->where('migration', $migration);

            if (!$row->first()) {
                Log::info($migration . " was not migrated before, probably it\'s a new migration file.");
                Log::info('Skipping rolled back: ' . $migration);

                continue;
            }

            $class = Str::studly(implode('_', array_slice(explode('_', $migration), 4)));

            // Includ the seeder class if not exists
            if (!class_exists($class)) {
                include $filename;
            }

            (new $class)->down();

            if ($row->delete()) {
                Log::info('Rolled back: ' . $migration);
            } else {
                Log::info('Rollback FAILED: ' . $migration);

                throw new \Exception('Migration rollback failed: ' . $this->slug);
            }
        }

        Log::info('All migrations has been rolled back for package ' . $this->slug);

        return $this;
    }
}
