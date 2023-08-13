<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class SeedFromSQLDump extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'incevio:seed-sql';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed DEMO content from SQL.dump file.';


    protected $db;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->db = env('DB_DATABASE');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->call('config:clear');

        $this->call('cache:clear');

        $this->call('incevio:clear-storage');

        // turn off referential integrity
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->drop_tables();

        $file = database_path('seeders/data/sql/zcart.sql');

        // Seed data
        if (file_exists($file)) {
            $this->comment(PHP_EOL . "Seeding data. Please wait, it may take a while...");

            $link = getMysqliConnection();

            $queries = file_get_contents($file);

            mysqli_multi_query($link, $queries) or die(mysqli_error($link));

            do {
                // This loop is important to run the query synchronously.
            } while (mysqli_next_result($link));

            $this->comment(PHP_EOL . "Seeding completed");
        }

        //turn referential integrity back on
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        // Reset demo images
        $demo_imgs = public_path('images/demo/imgs-for-sql-import');

        if (file_exists($demo_imgs)) {
            $destination = storage_path('app/public/images');

            // Remove old imagaes
            if (file_exists($destination)) {
                File::deleteDirectory($destination);
            }

            // Copy the fresh images
            File::copyDirectory($demo_imgs, $destination);
        }

        return 0;
    }

    /**
     * This method will drop all tables from database
     *
     * @return true
     */
    public function drop_tables()
    {
        $colname = 'Tables_in_' . $this->db;

        $tables = DB::select('SHOW TABLES');

        $droplist = [];
        foreach ($tables as $table) {
            $droplist[] = $table->$colname;
        }

        $droplist = implode(',', $droplist);

        if ($droplist) {
            $this->comment(PHP_EOL . "Dropping all tables. Please wait, it may take a while...");
            // DB::beginTransaction();
            DB::statement("DROP TABLE $droplist");
            // DB::commit();

            $this->comment(PHP_EOL . "All tables were dropped");
        }

        return true;
    }
}
