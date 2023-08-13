<?php

namespace Incevio\Package\Stub\Http\Controllers;

use App\Http\Controllers\Controller;
use Incevio\Package\Stub\Http\Requests\StubRequest;

class StubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StubRequest $request)
    {
        return view('stub::index');
    }
}
