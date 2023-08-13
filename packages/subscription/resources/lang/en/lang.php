<?php

return [
    'bill_amount' => 'Bill amount',
    'custom_subscription_fee' => 'Custom subscription fee',
    'custom_subscription_fee_amount' => 'Custom subscription fee :amount',
    'custom_subscription_fee_help_text' => 'If set, the system will ignore the subscription plans fee and this custom fee will be charged for this vendor.',
    'subscription_fee_for' => 'Subscription fee of :subscription plan(:from - :to).',
    'thanks' => 'Thanks',
    'button_text' => 'Visit Your Profile',
    'greeting' => 'Hello :shop',

    'notifications' => [
        'expire' => [
            'subject' => 'Shop subscription expiring in :day days',
            'message' => 'Please keep sufficient amount on you store wallet balance to get uninterrupted service.',
            'expire_date' => 'Expire Date  :date',
        ],

        'billing_failed' => [
            'subject' => 'Subscription billing failed',
            'message' => 'Subscription billing failed due to insufficient balance. Please deposit balance into your wallet to renew your subscription',
            'expire_date' => 'Expire Date  :date',
        ],

        'insufficient_balance' => [
            'subject' => 'Insufficient Balance',
            'message' => 'Your current wallet balance is running low. Please deposit balance into your wallet to continue your subscription, your current balance is :amount',
            'expire_date' => 'Expire Date  :date',
        ]
    ]

];
