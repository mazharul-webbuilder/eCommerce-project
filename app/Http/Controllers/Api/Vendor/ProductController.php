<?php

namespace App\Http\Controllers\api\vendor;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductLightResource;
use App\Repositories\Product\ProductRepository;
use App\Http\Requests\Validations\CreateProductRequest;
use App\Http\Requests\Validations\UpdateProductRequest;

class ProductController extends Controller
{
    private $product;

    public function __construct(ProductRepository $product)
    {
        parent::__construct();
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::mine()->with('featuredImage', 'image')->paginate();

        return ProductLightResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        try {
            $this->product->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.product_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ProductResource($this->product->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        try {
            $this->product->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.product_updated_successfully')], 200);
    }

    /**
     * trash product
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function trash($id)
    {
        try {
            $this->product->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.product_trashed_successfully')], 200);
    }

    /**
     * restore product
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        try {
            $this->product->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.product_restored_successfully')], 200);
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
            $this->product->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.product_deleted_successfully')], 200);
    }
}
