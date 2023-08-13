<?php

// Auth
use App\Models\Inventory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\Api\Vendor\TaxController;
use App\Http\Controllers\Api\Vendor\AuthController;
use App\Http\Controllers\Api\Vendor\CartController;
use App\Http\Controllers\Api\Vendor\HomeController;
use App\Http\Controllers\Api\Vendor\UserController;
use App\Http\Controllers\Api\Vendor\OrderController;
use App\Http\Controllers\Api\Vendor\AccountController;
use App\Http\Controllers\Api\Vendor\CarrierController;
use App\Http\Controllers\Api\Vendor\DisputeController;
use App\Http\Controllers\Api\Vendor\ProductController;
use App\Http\Controllers\Api\Vendor\CategoryController;
use App\Http\Controllers\Api\Vendor\SupplierController;
use App\Http\Controllers\Api\Vendor\AttributeController;
use App\Http\Controllers\Api\Vendor\InventoryController;
use App\Http\Controllers\Api\Vendor\WarehouseController;
use App\Http\Controllers\Api\Vendor\DeliveryboyController;
use App\Http\Controllers\Api\Vendor\ManufacturerController;
use App\Http\Controllers\Api\Vendor\CategoryGroupController;
use App\Http\Controllers\Api\Vendor\AttributeValueController;
use App\Http\Controllers\Api\Vendor\CategorySubGroupController;
use App\Http\Controllers\Api\Vendor\OrderFulfillmentController;
use App\Http\Controllers\Api\Vendor\SubscriptionPlanController;
use App\Http\Controllers\Api\Vendor\OrderCancellationController;
use App\Http\Controllers\Api\Vendor\OrderConversationController;


Route::prefix('vendor')->group(function () {

    // Authentication
    Route::prefix('auth')->group(function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
    });

    Route::middleware('auth:vendor_api')->group(function () {

        // Account
        Route::get('profile', [AccountController::class, 'profile']);

        // Attributes
        Route::get('attributes', [AttributeController::class, 'index']);
        Route::post('attribute/create', [AttributeController::class, 'store']);
        Route::get('attribute/{attribute}', [AttributeController::class, 'show']);
        Route::get('attribute/{attribute}/values', [AttributeController::class, 'attribute_values']);
        Route::put('attribute/{attribute}/update', [AttributeController::class, 'update']);
        Route::delete('attribute/{attribute}/trash', [AttributeController::class, 'trash']);
        Route::put('attribute/{attribute_id}/restore', [AttributeController::class, 'restore']);
        Route::delete('attribute/{attribute_id}/delete', [AttributeController::class, 'destroy']);

        // Attribute Values
        Route::post('attribute-value/create', [AttributeValueController::class, 'store']);
        Route::get('attribute-value/{attribute_value}', [AttributeValueController::class, 'show']);
        Route::put('attribute-value/{attribute_value}/update', [AttributeValueController::class, 'update']);
        Route::delete('attribute-value/{attribute_value}/trash', [AttributeValueController::class, 'trash']);
        Route::put('attribute-value/{attribute_value_id}/restore', [AttributeValueController::class, 'restore']);
        Route::delete('attribute-value/{attribute_value_id}/delete', [AttributeValueController::class, 'destroy']);

        // Category Groups
        Route::get('category-groups', [CategoryGroupController::class, 'index']);
        Route::get('category-group/{category_group}', [CategoryGroupController::class, 'show']);
        Route::post('category-group/create', [CategoryGroupController::class, 'store']);
        Route::put('category-group/{category_group}/update', [CategoryGroupController::class, 'update']);
        Route::delete('category-group/{category_group}/trash', [CategoryGroupController::class, 'trash']);
        Route::put('category-group/{category_grou_id}/restore', [CategoryGroupController::class, 'restore']);
        Route::delete('category-group/{category_grou_id}/delete', [CategoryGroupController::class, 'destroy']);

        // Category Sub-Groups
        Route::get('category-sub-groups', [CategorySubGroupController::class, 'index']);
        Route::post('category-sub-group/create', [CategorySubGroupController::class, 'store']);
        Route::get('category-sub-group/{sub_group}', [CategorySubGroupController::class, 'show']);
        Route::put('category-sub-group/{sub_group}/update', [CategorySubGroupController::class, 'update']);
        Route::delete('category-sub-group/{sub_group}/trash', [CategorySubGroupController::class, 'trash']);
        Route::put('category-sub-group/{sub_group_id}/restore', [CategorySubGroupController::class, 'restore']);
        Route::delete('category-sub-group/{sub_group_id}/delete', [CategorySubGroupController::class, 'destroy']);

        // Categories
        Route::get('categories', [CategoryController::class, 'index']);
        Route::get('category/{category}', [CategoryController::class, 'show']);
        Route::post('category/create', [CategoryController::class, 'store']);
        Route::put('category/{category}/update', [CategoryController::class, 'update']);
        Route::delete('category/{category}/trash', [CategoryController::class, 'trash']);
        Route::put('category/{category_id}/restore', [CategoryController::class, 'restore']);
        Route::delete('category/{categor_idy}/delete', [CategoryController::class, 'destroy']);

        // Manufacturers
        Route::get('manufacturers', [ManufacturerController::class, 'index']);
        Route::post('manufacturer/create', [ManufacturerController::class, 'store']);
        Route::get('manufacturer/{manufacturer}', [ManufacturerController::class, 'show']);
        Route::put('manufacturer/{manufacturer}/update', [ManufacturerController::class, 'update']);
        Route::delete('manufacturer/{manufacturer}/trash', [ManufacturerController::class, 'trash']);
        Route::put('manufacturer/{manufacturer_id}/restore', [ManufacturerController::class, 'restore']);
        Route::delete('manufacturer/{manufacturer_id}/delete', [ManufacturerController::class, 'destroy']);

        // Products
        Route::get('products', [ProductController::class, 'index']);
        Route::post('product/create', [ProductController::class, 'store']);
        Route::get('product/{product}', [ProductController::class, 'show']);
        Route::put('product/{product}/update', [ProductController::class, 'update']);
        Route::delete('product/{product}/trash', [ProductController::class, 'trash']);
        Route::put('product/{product_id}/restore', [ProductController::class, 'restore']);
        Route::delete('product/{product_id}/delete', [ProductController::class, 'destroy']);

        // Inventories
        Route::get('inventories', [InventoryController::class, 'index']);
        Route::get('inventory/{inventory}', [InventoryController::class, 'show']);
        Route::put('inventory/{inventory}/update', [InventoryController::class, 'update']);
        Route::put('inventory/{inventory}/quick_update', [InventoryController::class, 'quick_update']);
        Route::delete('inventory/{inventory}/trash', [InventoryController::class, 'trash']);
        Route::put('inventory/{inventory_id}/restore', [InventoryController::class, 'restore']);
        Route::delete('inventory/{inventory_id}/delete', [InventoryController::class, 'delete']);

        // Warehouses
        Route::get('warehouses', [WarehouseController::class, 'index']);
        Route::post('warehouse/create', [WarehouseController::class, 'store']);
        Route::get('warehouse/{warehouse}', [WarehouseController::class, 'show']);
        Route::put('warehouse/{warehouse}/update', [WarehouseController::class, 'update']);
        Route::delete('warehouse/{warehouse}/trash', [WarehouseController::class, 'trash']);
        Route::put('warehouse/{warehouse_id}/restore', [WarehouseController::class, 'restore']);
        Route::delete('warehouse/{warehouse_id}/delete', [WarehouseController::class, 'destroy']);

        // Suppliers
        Route::get('suppliers', [SupplierController::class, 'index']);
        Route::post('supplier/create', [SupplierController::class, 'store']);
        Route::get('supplier/{supplier}', [SupplierController::class, 'show']);
        Route::put('supplier/{supplier}/update', [SupplierController::class, 'update']);
        Route::delete('supplier/{supplier}/trash', [SupplierController::class, 'trash']);
        Route::put('supplier/{supplier_id}/restore', [SupplierController::class, 'restore']);
        Route::delete('supplier/{supplier_id}/delete', [SupplierController::class, 'destroy']);

        // Packagings (Addon)

        // Shipping
        Route::get('carriers', [CarrierController::class, 'index']);

        // Promotion

        // Carts
        Route::get('carts', [CartController::class, 'index']);

        // Orders
        Route::get('orders', [OrderController::class, 'index']);
        Route::get('order/{order}', [OrderController::class, 'show']);
        Route::put('order/{order}/update_status', [OrderController::class, 'update_status']);
        Route::put('order/{order}/mark_as_paid', [OrderController::class, 'mark_as_paid']);
        Route::put('order/{order}/mark_as_unpaid', [OrderController::class, 'mark_as_unpaid']);
        Route::delete('order/{order}/archive', [OrderController::class, 'archive']);
        Route::put('order/{order_id}/unarchive', [OrderController::class, 'unarchive']);
        Route::post('order/{order}/add_note', [OrderController::class, 'add_note']);
        Route::delete('order/{order}', [OrderController::class, 'delete']);
        Route::get('order/{order}/invoice', [OrderController::class, 'invoice']);

        // Fulfillment
        Route::post('order/{order}/fulfill', [OrderFulfillmentController::class, 'fulfill']);
        Route::put('order/{order}/delivered', [OrderFulfillmentController::class, 'delivered']);
        Route::post('order/{order}/assign_delivery_boy', [OrderFulfillmentController::class, 'assign_delivery_boy']);

        // Order conversations

        // Disputes
        Route::get('disputes', [DisputeController::class, 'index']);
        Route::get('dispute/{dispute}', [DisputeController::class, 'show']);

        // Cancellation
        Route::get('cancellation/requests', [OrderCancellationController::class, 'index']);
        Route::put('order/{order}/cancel', [OrderCancellationController::class, 'cancel']);
        Route::put('order/{order}/approve_cancellation', [OrderCancellationController::class, 'approve_request']);
        Route::put('order/{order}/decline_cancellation', [OrderCancellationController::class, 'decline_request']);

        // Order Conversations
        Route::get('order/{order}/conversations', [OrderConversationController::class, 'index']);
        Route::post('order/{order}/conversations', [OrderConversationController::class, 'respond']);

        // Refunds

        // Users
        Route::get('users', [UserController::class, 'index']);
        Route::post('user/create', [UserController::class, 'store']);
        Route::get('user/{user}', [UserController::class, 'show']);
        Route::put('user/{user}/update', [UserController::class, 'update']);
        Route::delete('user/{user}/trash', [UserController::class, 'trash']);
        Route::put('user/{user_id}/restore', [UserController::class, 'restore']);
        Route::delete('user/{user_id}/delete', [UserController::class, 'destroy']);

        // Delivery Boys
        Route::get('delivery-boys', [DeliveryboyController::class, 'index']);
        Route::post('delivery-boy/create', [DeliveryboyController::class, 'store']);
        Route::get('delivery-boy/{delivery_boy}', [DeliveryboyController::class, 'show']);
        Route::put('delivery-boy/{delivery_boy}/update', [DeliveryboyController::class, 'update']);
        Route::delete('delivery-boy/{delivery_boy}/trash', [DeliveryboyController::class, 'trash']);
        Route::put('delivery-boy/{delivery_boy_id}/restore', [DeliveryboyController::class, 'restore']);
        Route::delete('delivery-boy/{delivery_boy_id}/delete', [DeliveryboyController::class, 'destroy']);

        // Roles and Permissions

        // Settings

        // Taxes
        Route::get('taxes', [TaxController::class, 'index']);
        Route::post('tax/create', [TaxController::class, 'store']);
        Route::get('tax/{tax}', [TaxController::class, 'show']);
        Route::put('tax/{tax}/update', [TaxController::class, 'update']);
        Route::delete('tax/{tax}/trash', [TaxController::class, 'trash']);
        Route::put('tax/{tax_id}/restore', [TaxController::class, 'restore']);
        Route::delete('tax/{tax_id}/delete', [TaxController::class, 'destroy']);

        // Payment Methods

        // Live Chat  (Addon)

        // Messages

        // Wallet  (Addon)

        // Reports

        // Form data
        Route::get('data/{category_id}/category_attributes', [FormDataController::class, 'category_attributes']);
        Route::get('data/{product_id}/product_attributes', [FormDataController::class, 'product_attributes']);
        Route::get('data/inventories', [FormDataController::class, 'inventories']);
        Route::get('data/delivery_boys', [FormDataController::class, 'delivery_boys']);
        Route::get('data/shipping_carriers', [FormDataController::class, 'shipping_carriers']);
        Route::get('data/warehouses', [FormDataController::class, 'warehouses']);
        Route::get('data/suppliers', [FormDataController::class, 'suppliers']);
        Route::get('data/order_statuses', [FormDataController::class, 'order_statuses']);
        Route::get('data/item_conditions', [FormDataController::class, 'item_conditions']);
        Route::get('data/seo_tags', [FormDataController::class, 'seo_tags']);
        Route::get('data/category_subgroups', [FormDataController::class, 'category_subgroups']);
        Route::get('data/category_subgroups_with_parent', [FormDataController::class, 'category_subgroups_with_parent']);
        Route::get('data/category_groups', [FormDataController::class, 'category_groups']);
        Route::get('data/categories', [FormDataController::class, 'categories']);
        Route::get('data/categories_with_parent', [FormDataController::class, 'categories_with_parent']);
        Route::get('data/attribute_types', [FormDataController::class, 'attribute_types']);
        Route::get('data/shops', [FormDataController::class, 'shops']);
        Route::get('data/attributes', [FormDataController::class, 'attributes']);
        Route::get('data/manufacturers', [FormDataController::class, 'manufacturers']);
        Route::get('data/countries', [FormDataController::class, 'countries']);
        Route::get('data/roles', [FormDataController::class, 'roles']);
        Route::get('data/business_days', [FormDataController::class, 'business_days']);
        Route::get('data/states/{country_id}', [FormDataController::class, 'states']);
        Route::get('data/subscription_plans', [FormDataController::class, 'subscriptionPlans']);
        Route::get('data/gtin_type', [FormDataController::class, 'gtin_type']);
        Route::get('data/tag_lists', [FormDataController::class, 'tag_lists']);

        // Other APIs
        Route::get('system_configs', [HomeController::class, 'system_configs']);
    });
});
