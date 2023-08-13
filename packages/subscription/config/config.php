<?php

return [

    /**
     * This values will be used as default for the package
     */
    'default' => [

        /**
         * The vendor will be charged before the expiry time to keep the store active.
         * It should be more that 60 mins because the system check in every hr. Default is 90 mins
         */
        'charge_minute_before_expiry' => 90,

        /**
         * To send notifications to the vendor's email address.
         * Default is [7,3,1] That means the system will send 1st notice before 7 days,
         * 2nd notice before 3 days, and the last one before 1 day.
         * Set Null to disable notification emails
         */
        'send_notice_before_days_of_expiry' => [7,3,1],
    ],

    'routes' => [
        //
    ],
];
