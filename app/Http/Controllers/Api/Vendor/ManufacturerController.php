<?php

namespace App\Http\Controllers\api\vendor;

use App\Models\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ManufacturerResource;
use App\Http\Resources\ManufacturerLightResource;
use App\Repositories\Manufacturer\ManufacturerRepository;
use App\Http\Requests\Validations\CreateManufacturerRequest;
use App\Http\Requests\Validations\UpdateManufacturerRequest;

class ManufacturerController extends Controller
{
    private $manufacturer;

    /**
     * construct
     */
    public function __construct(ManufacturerRepository $manufacturer)
    {
        parent::__construct();
        $this->manufacturer = $manufacturer;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = Manufacturer::mine()->with('logoImage')->paginate();

        return ManufacturerLightResource::collection($manufacturers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateManufacturerRequest $request)
    {
        try {
            $this->manufacturer->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.manufacturer_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  Manufacturer $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacturer $manufacturer)
    {
        return new ManufacturerResource($manufacturer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManufacturerRequest $request, $id)
    {
        try {
            $this->manufacturer->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.manufacturer_updated_successfully')], 200);
    }

    /**
     * Soft delete model to trash
     *
     * @param  Manufacturer $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function trash(Manufacturer $manufacturer)
    {
        try {
            $this->manufacturer->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.manufacturer_trashed_successfully')], 200);
    }

    /**
     * restore manufacturer
     *
     * @param  id $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        try {
            $this->manufacturer->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.manufacturer_restored_successfully')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  id $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->manufacturer->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.manufacturer_deleted_successfully')], 200);
    }
}
