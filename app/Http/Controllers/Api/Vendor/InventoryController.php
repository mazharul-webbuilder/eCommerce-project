<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\InventoryResource;
use App\Http\Resources\InventoryLightResource;
use App\Repositories\Inventory\InventoryRepository;
use App\Http\Requests\Validations\UpdateInventoryRequest;
use App\Http\Requests\Validations\QuickInventoryUpdateRequest;

class InventoryController extends Controller
{
  /**
   * construct
   */
  public function __construct(InventoryRepository $inventory)
  {
    parent::__construct();

    $this->inventory = $inventory;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    // Check permission

    $filter = $request->get('filter');

    $inventories = Inventory::mine();

    // When the inventories need to filter
    switch ($filter) {
      case 'active':
      case 'actives':
        $inventories = $inventories->active();
        break;

      case 'inactive':
      case 'inactives':
        $inventories = $inventories->inActive();
        break;

      case 'new_arraival':
      case 'new_arraivals':
        $inventories = $inventories->newArraivals();
        break;

      case 'low_quantity':
      case 'low_quantities':
        $inventories = $inventories->lowQtt();
        break;

      case 'out_of_stock':
      case 'out_of_stocks':
        $inventories = $inventories->stockOut();
        break;

      case 'has_offer':
      case 'has_offers':
        $inventories = $inventories->hasOffer();
        break;

      case 'free_shipping':
      case 'free_shippings':
        $inventories = $inventories->freeShipping();
        break;

      case 'trash':
      case 'trashes':
      case 'trashed':
        $inventories = $inventories->onlyTrashed();
        break;
    }

    $inventories = $inventories->paginate(config('mobile_app.view_listing_per_page', 8));

    return InventoryLightResource::collection($inventories);
  }

  /**
   * Display a listing of the resource.
   * @param  Inventory $inventory
   * @return \Illuminate\Http\Response
   */
  public function show(Request $request, Inventory $inventory)
  {
    $this->authorize('view', $inventory); // Check permission

    return new InventoryResource($inventory);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  Inventory $inventory
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateInventoryRequest $request, Inventory $inventory)
  {
    $this->authorize('update', $inventory); // Check permission

    try {
      $this->inventory->update($request, $inventory);
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.data_updated_successfully')], 200);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  Inventory $inventory
   * @return \Illuminate\Http\Response
   */
  public function quick_update(QuickInventoryUpdateRequest $request, Inventory $inventory)
  {
    $this->authorize('update', $inventory); // Check permission

    try {
      $data = !is_incevio_package_loaded('pharmacy') ? $request->except('expiry_date') : $request->all();

      $inventory->update($data);
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.item_updated_successfully')], 200);
  }

  /**
   * Trash the specified resource.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  Inventory $inventory
   * @return \Illuminate\Http\Response
   */
  public function trash(Request $request, Inventory $inventory)
  {
    $this->authorize('delete', $inventory); // Check permission

    try {
      $inventory->delete();
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.data_trashed_successfully')], 200);
  }

  /**
   * Restore the specified resource from soft delete.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  $id
   * @return \Illuminate\Http\Response
   */
  public function restore(Request $request, $id)
  {
    // Check permission

    try {
      $this->inventory->restore($id);
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.data_restored_successfully')], 200);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  $id
   * @return \Illuminate\Http\Response
   */
  public function delete(Request $request, $id)
  {
    // Check permission

    try {
      $this->inventory->destroy($id);
    } catch (\Exception $e) {
      return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
    }

    return response()->json(['message' => trans('api_vendor.data_deleted_successfully')], 200);
  }
}
