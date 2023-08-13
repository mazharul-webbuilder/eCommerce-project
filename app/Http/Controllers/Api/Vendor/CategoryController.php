<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Category;
use App\Common\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use phpDocumentor\Reflection\Types\Parent_;
use App\Http\Resources\CategoryLightResource;
use App\Http\Resources\CategoryDetailResource;
use App\Repositories\Category\CategoryRepository;
use App\Http\Requests\Validations\CreateCategoryRequest;
use App\Http\Requests\Validations\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     *  Authorizable must be implement
     */
    //    use Authorizable;

    private $category;

    /**
     * construct
     */
    public function __construct(CategoryRepository $category)
    {
        Parent::__construct();
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::active();

        if ($request->has('sub_group_id')) {
            $categories = $categories->where('category_sub_group_id', $request->get('sub_group_id'));
        }

        $categories = $categories->with(['coverImage', 'featureImage'])
            ->orderBy('order', 'asc')->paginate();

        return CategoryLightResource::collection($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryRequest $request)
    {
        try {
            $category = $this->category->store($request);

            DB::transaction(function () use ($category, $request) {
                $category->attrsList()->sync($request->get('attribute_ids'));
            });
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_created_successfully')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return new CategoryDetailResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $this->category->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_updated_successfully')]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function trash(Request $request, $id)
    {
        try {
            $this->category->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_trashed_successfully')], 200);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        try {
            $this->category->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_restored_successfully')], 200);
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
            $this->category->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_deleted_successfully')], 200);
    }
}
