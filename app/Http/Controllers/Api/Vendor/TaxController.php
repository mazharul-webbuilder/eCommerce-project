<?php

namespace App\Http\Controllers\api\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Tax\TaxRepository;
use App\Http\Resources\TaxResource;

class TaxController extends Controller
{
    private $tax;

    /**
     * constructor call
    */
    public function __construct(TaxRepository $tax)
    {
        parent::__construct();
        $this->tax = $tax;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return TaxResource::collection($this->tax->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Need TaxCreateRequest Validation.
        // Need Permission cheek

        try {
            $this->tax->store($request);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.tax_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new TaxResource($this->tax->find($id));
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
        // Need TaxUpdateRequest validation
        // Need permission check

        try {
            $this->tax->update($request, $id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.tax_updated_successfully')]);
    }

    /**
     * move to trash
    */
    public function trash($id)
    {
        try {
            $this->tax->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.tax_trashed_successfully')]);
    }

    /**
     * restore trash data
     */
    public function restore($id)
    {
        try {
            $this->tax->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.tax_restored_successfully')]);
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
            $this->tax->destroy($id);

        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.tax_deleted_successfully')]);

    }
}
