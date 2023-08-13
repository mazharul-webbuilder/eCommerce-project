<?php

namespace App\Http\Controllers\api\vendor;

use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;
use App\Http\Resources\AttributeValueResource;
use App\Http\Resources\AttributeValueLightResource;
use App\Repositories\AttributeValue\AttributeValueRepository;
use App\Http\Requests\Validations\CreateAttributeValueRequest;

class AttributeValueController extends Controller
{
    private $attribute_value;

    /**
     * construct
     */
    public function __construct(AttributeValueRepository $attribute_value)
    {
        parent::__construct();
        $this->attribute_value = $attribute_value;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AttributeValueLightResource::collection($this->attribute_value->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAttributeValueRequest $request)
    {
        try {
            $this->attribute_value->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.attribute_value_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeValue $attribute_value)
    {
        return new AttributeValueResource($attribute_value);
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
            $this->attribute_value->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.attribute_value_updated_successfully')], 200);
    }

    /**
     * move attribute value to trash
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash($id)
    {
        try {
            $this->attribute_value->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.attribute_value_restored_successfully')], 200);
    }
    /**
     * restore attribute value from trash
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        try {
            $this->attribute_value->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.attribute_value_restored_successfully')], 200);
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
            $this->attribute_value->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.attribute_value_deleted_successfully')], 200);
    }
}
