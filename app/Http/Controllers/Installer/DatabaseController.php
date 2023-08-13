<?php

namespace App\Http\Controllers\Installer;

use App\Http\Controllers\Installer\Helpers\DatabaseManager;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    /**
     * @var DatabaseManager
     */
    private $databaseManager;

    /**
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    /**
     * Migrate and seed the database.
     *
     * @return \Illuminate\View\View
     */
    public function database()
    {
        if (! $this->checkDatabaseConnection()) {
            return redirect()->back()->withErrors([
                'database_connection' => trans('installer_messages.environment.wizard.form.db_connection_failed'),
            ]);
        }

        ini_set('max_execution_time', 600); //600 seconds = 10 minutes

        $response = $this->databaseManager->migrateAndSeed();

        return redirect()->route('Installer.final')->with(['message' => $response]);
    }

    /**
     * Validate database connection with user credentials (Form Wizard).
     *
     * @return bool
     */
    private function checkDatabaseConnection()
    {
        try {
            DB::connection()->getPdo();

            return true;
        } catch (Exception $e) {
            return false;
        }
    }
}
