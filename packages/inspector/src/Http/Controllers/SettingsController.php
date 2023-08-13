<?php

namespace Incevio\Package\Inspector\Http\Controllers;

// use Illuminate\Http\Request;
use App\Common\Authorizable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Incevio\Package\Inspector\Models\InspectorModel;

class SettingsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('setting', InspectorModel::class);

        return view('inspector::settings');
    }
}
