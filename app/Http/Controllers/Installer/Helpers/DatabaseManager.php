<?php

namespace App\Http\Controllers\Installer\Helpers;

use Exception;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\BufferedOutput;

class DatabaseManager
{
    /**
     * Migrate and seed the database.
     *
     * @return array
     */
    public function migrateAndSeed()
    {
        $outputLog = new BufferedOutput;

        $this->sqlite($outputLog);

        return $this->migrate($outputLog);
    }

    /**
     * Run the migration and call the seeder.
     *
     * @param collection $outputLog
     * @return collection
     */
    private function migrate($outputLog)
    {
        try {
            Artisan::call('migrate', ['--force' => true], $outputLog);
        } catch (Exception $e) {
            return $this->response($e->getMessage(), 'error', $outputLog);
        }

        return $this->seed($outputLog);
    }

    /**
     * Seed the database.
     *
     * @param collection $outputLog
     * @return array
     */
    private function seed($outputLog)
    {
        try {
            // Seed the database
            Artisan::call('db:seed', ['--force' => true], $outputLog);

            // Generate Incevio Key
            Artisan::call('incevio:generate-key', ['--force' => true], $outputLog);
        } catch (Exception $e) {
            return $this->response($e->getMessage(), 'error', $outputLog);
        }

        return $this->response(trans('installer_messages.final.finished'), 'success', $outputLog);
    }

    /**
     * Seed the database with DemoData.
     *
     * @return array
     */
    public function seedDemoData()
    {
        ini_set('max_execution_time', 1200); //1200 seconds = 20 minutes

        $outputLog = new BufferedOutput;

        try {
            Artisan::call('incevio:demo');
        } catch (Exception $e) {
            return $this->response($e->getMessage(), 'error', $outputLog);
        }

        return $this->response(trans('installer_messages.final.finished'), 'success', $outputLog);
    }

    /**
     * Return a formatted error messages.
     *
     * @param $message
     * @param string $status
     * @param collection $outputLog
     * @return array
     */
    private function response($message, $status, $outputLog)
    {
        return [
            'status' => $status,
            'message' => $message,
            'dbOutputLog' => $outputLog->fetch(),
        ];
    }

    /**
     * check database type. If SQLite, then create the database file.
     *
     * @param collection $outputLog
     */
    private function sqlite($outputLog)
    {
        if (DB::connection() instanceof SQLiteConnection) {
            $database = DB::connection()->getDatabaseName();
            if (!file_exists($database)) {
                touch($database);
                DB::reconnect(Config::get('database.default'));
            }
            $outputLog->write('Using SqlLite database: ' . $database, 1);
        }
    }
}
