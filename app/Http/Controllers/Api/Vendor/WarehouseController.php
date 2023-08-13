<?php

namespace App\Http\Controllers\api\vendor;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\WarehouseResource;
use App\Http\Resources\WarehouseLightResource;
use App\Repositories\Warehouse\WarehouseRepository;
use App\Http\Requests\Validations\CreateWarehouseRequest;
use App\Http\Requests\Validations\UpdateWarehouseRequest;

class WarehouseController extends Controller
{
    private $warehouse;

    /**
     * construct
     */
    public function __construct(WarehouseRepository $warehouse)
    {
        parent::__construct();
        $this->warehouse = $warehouse;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses = Warehouse::mine()->with('manager', 'image')->paginate();

        return WarehouseLightResource::collection($warehouses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateWarehouseRequest $request)
    {
        try {
            $this->warehouse->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.warehouse_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        return new WarehouseResource($warehouse);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWarehouseRequest $request, $id)
    {
        try {
            $this->warehouse->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.warehouse_updated_successfully')], 200);
    }

    /**
     * Move to Trash
     */
    public function trash($id)
    {
        try {
            $this->warehouse->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.warehouse_trashed_successfully')], 200);
    }

    /**
     * restore trashed warehouse
     */
    public function restore($id)
    {
        try {
            $this->warehouse->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.warehouse_restored_successfully')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->warehouse->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.warehouse_destroyed_successfully')], 200);
    }
}
