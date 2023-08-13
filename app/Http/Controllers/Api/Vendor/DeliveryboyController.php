<?php

namespace App\Http\Controllers\api\vendor;

use App\Http\Controllers\Controller;
use App\Http\Resources\DeliveryBoyResource;
use Illuminate\Http\Request;
use App\Repositories\DeliveryBoy\DeliveryBoyRepository;

class DeliveryboyController extends Controller
{
    private $delivery_boy;

    /**
     * construct
    */
    public function __construct(DeliveryBoyRepository $delivery_boy)
    {
        parent::__construct();
        $this->delivery_boy = $delivery_boy;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeliveryBoyResource::collection($this->delivery_boy->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->delivery_boy->store($request);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.delivery_boy_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new DeliveryBoyResource($this->delivery_boy->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->delivery_boy->update($request, $id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.delivery_boy_updated_successfully')], 200);
    }

    /**
     * trashed delivery boy
     */
    public function trash($id)
    {
        try {
            $this->delivery_boy->trash($id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.delivery_boy_trashed_successfully')], 200);
    }

    /**
     * restore delivery boy
     */
    public function restore($id)
    {
        try {
            $this->delivery_boy->restore($id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.delivery_boy_restored_successfully')], 200);
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
            $this->delivery_boy->destroy($id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.delivery_boy_deleted_successfully')], 200);
    }
}
