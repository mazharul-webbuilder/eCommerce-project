<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryGroupLightResource;
use Illuminate\Http\Request;
use App\Models\CategoryGroup;
use App\Http\Resources\CategoryGroupResource;
use App\Http\Requests\Validations\CreateCategoryGroupRequest;
use App\Http\Requests\Validations\UpdateCategoryGroupRequest;
use App\Repositories\CategoryGroup\CategoryGroupRepository;

class CategoryGroupController extends Controller
{
    private $categoryGroup;

    /**
     * construct
     */
    public function __construct(CategoryGroupRepository $category_groups)
    {
        parent::__construct();
        $this->categoryGroup = $category_groups;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryGroups = CategoryGroup::all();

        return CategoryGroupLightResource::collection($categoryGroups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoryGroupRequest $request)
    {
        // Need to do CreateCategoryGroupRequest validation
        // Need to check role permission

        try {
            $this->categoryGroup->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_group_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryGroup $category_group)
    {
        return new CategoryGroupResource($category_group);
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
        // Need updateRequest Validation
        // Need permission check

        try {
            $this->categoryGroup->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_group_updated_successfully')], 200);
    }

    /**
     * category group item move trash
     */
    public function trash($id)
    {
        try {
            $this->categoryGroup->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_group_trashed_successfully')], 200);
    }

    /**
     * category group item restore
     */
    public function restore($id)
    {
        try {
            $this->categoryGroup->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_group_restore_successfully')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // Need to check permission role
        // Need to do request validatio

        try {
            $this->categoryGroup->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_group_deleted_successfully')], 200);
    }
}
