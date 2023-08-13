<?php

namespace App\Http\Controllers\Api\vendor;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\CategorySubGroup;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategorySubGroupResource;
use App\Http\Resources\CategorySubGroupLightResource;
use App\Http\Requests\Validations\CreateCategorySubGroupRequest;
use App\Repositories\CategorySubGroup\CategorySubGroupRepository;

class CategorySubGroupController extends Controller
{
    private $categorySubGroup;

    /**
     * load constructor
     */
    public function __construct(CategorySubGroupRepository $categorySubGroup)
    {
        parent::__construct();
        $this->categorySubGroup = $categorySubGroup;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subGroups = CategorySubGroup::with(
            'group:id,name,deleted_at',
            'coverImage'
        )->withCount('categories');

        if ($request->has('group_id')) {
            $subGroups = $subGroups->where('category_group_id', $request->get('group_id'));
        }

        $subGroups = $subGroups->paginate();

        return CategorySubGroupLightResource::collection($subGroups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategorySubGroupRequest $request)
    {
        // Have to do request validation
        // Need to check role permission

        try {
            $this->categorySubGroup->store($request);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_subgroup_created_successfully')], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorySubGroup = $this->categorySubGroup->find($id);

        return new CategorySubGroupResource($categorySubGroup);
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
            $this->categorySubGroup->update($request, $id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_sub_group_update_successfully')], 200);
    }

    /**
     * @param int $id;
     * @return \Illuminate\Http\Response
     */
    public function trash($id)
    {
        try {
            $this->categorySubGroup->trash($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_sub_group_trashed_successfully')], 200);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        try {
            $this->categorySubGroup->restore($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_sub_group_restore_successfully')], 200);
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
            $this->categorySubGroup->destroy($id);
        } catch (\Exception $e) {
            return response()->json(['message' => trans('api_vendor.something_went_wrong')], 400);
        }

        return response()->json(['message' => trans('api_vendor.category_sub_group_deleted_successfully')], 200);
    }
}
