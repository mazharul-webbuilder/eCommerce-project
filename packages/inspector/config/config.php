<?php
return [

    /**
     * Package name routes
     */
    'routes' => [
        'settings' => 'inspector.settings',
    ],

    /**
     * Models that will be inspected by the package
     */
    'models' => [
        [
            'class' => \App\Models\Product::class,
            'show' => 'admin.catalog.product.show',
            'edit' => 'admin.catalog.product.edit'
        ], [
            'class' => \App\Models\Inventory::class,
            'show' => 'admin.stock.inventory.show',
            'edit' => 'admin.stock.inventory.edit',
        ]
    ],

];
