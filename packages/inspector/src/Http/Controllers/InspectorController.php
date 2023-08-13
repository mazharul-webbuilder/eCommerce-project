<?php

namespace Incevio\Package\Inspector\Http\Controllers;

use App\Common\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Incevio\Package\Inspector\Jobs\AfterInspectionJob;
use Incevio\Package\Inspector\Models\InspectorModel;
use Incevio\Package\Inspector\Services\InspectorService;
use Incevio\Package\Inspector\Notifications\ApproveInspected;
use Incevio\Package\Inspector\Notifications\DenyInspected;

class InspectorController extends Controller
{
    //use Authorizable;

    /**
     * Inspected Items
     */
    public function inspectables()
    {
        Gate::authorize('index', InspectorModel::class);

        $inspectables = InspectorModel::all();

        return view('inspector::inspectables', compact('inspectables'));
    }

    /**
     * Approve Inspected Items
     */
    public function approveItem(Request $request,  $id)
    {
        Gate::authorize('approve', InspectorModel::class);

        $className = $request->get('className');
        $class = new $className();
        $inspector = new InspectorService($class::find($id));
        $inspector->approveInspectedItem($id);

        // Dispatch the after inspection Job
        AfterInspectionJob::dispatch($inspector, ApproveInspected::class);

        return redirect()->back()->with('success', trans('inspector::lang.msg.approve_success'));
    }

    /**
     * Block Inspected Item
     */
    public function blockItem(Request $request, $id)
    {
        Gate::authorize('delete', InspectorModel::class);

        $className = $request->get('className');
        $class = new $className();
        $inspector = new InspectorService($class::find($id));
        $inspector->blockInspectedItem($id);

        // Dispatch the after inspection Job
        AfterInspectionJob::dispatch($inspector, DenyInspected::class);

        return redirect()->back()->with('success', trans('inspector::lang.msg.deny_success'));
    }

    /**
     * Modify the inspetable model
     *
     * @param inspetable $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InspectorModel $inspetable)
    {
        Gate::authorize('edit', InspectorModel::class);

        $field = $inspetable->field_name;

        $record = $inspetable->inspectable_type::find($inspetable->inspectable_id);

        return view('inspector::edit', compact('record', 'inspetable', 'field'));
    }

    /**
     * Update the inspetable model
     *
     * @param inspetable $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InspectorModel $inspetable)
    {
        Gate::authorize('edit', InspectorModel::class);

        $request->validate([
            'inspectable' => 'required'
        ]);

        $field = $inspetable->field_name;

        $record = $inspetable->inspectable_type::find($inspetable->inspectable_id);

        $record->$field = $request->inspectable;

        $record->save();

        return redirect()->back()->with('success', trans('inspector::lang.msg.inspectable_updated'));
    }
}
