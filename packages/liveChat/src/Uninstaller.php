<?php

namespace Incevio\Package\LiveChat;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Uninstaller
{
    public $package;

    public function __construct()
    {
        $this->package = 'LiveChat';
    }

    public function cleanDatabase()
    {
        if (DB::table('chat_conversations')) {
            DB::table('modules')->where('name', 'Live Chat')->delete();
            DB::table('chat_conversations')->delete();
            DB::table('replies')->where('repliable_type', 'LIKE','%ChatConversation')->delete();
            Log::info("Cleaning successfully done for " . $this->package);

            return true;
        }

        Log::info("Cleaning FAILED: " . $this->package);

        throw new \Exception('Package data cleening action failed: ' . $this->package);
    }
}

