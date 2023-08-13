<?php

namespace Incevio\Package\Packaging\Database\Seeds;

use Carbon\Carbon;
use App\Helpers\PackageSeeder;
use Illuminate\Support\Facades\DB;

class ChatSeeder extends PackageSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Permissions
        $actions = 'view,reply';
        $this->seedPermissions('Chat Conversation', 'Merchant', $actions);
    }
}
