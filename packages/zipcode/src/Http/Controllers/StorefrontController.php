<?php

namespace Incevio\Package\Zipcode\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Incevio\Package\zipcode\Http\Requests\ZipcodeUpdateRequest;

class StorefrontController extends Controller
{
    /**
     * Show modal
     *
     * @return \Illuminate\Http\Response
     */
    public function modal()
    {
        return view('zipcode::_modal')->render();
    }

    /**
     * Search Zipcodes
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function searchZipcode(Request $request)
    {
        $term = $request->input('q');
        $results = [];

        if(strlen($term) < 3) {
            return Response::json($results);
        }

        $zipcodes = DB::table('zipcodes')->where('zip', 'LIKE', '%'.$term.'%')->take(10)->get();

        foreach ($zipcodes as $zipcode) {
            if (Str::contains($zipcode->zip, ',')){
                $exps = explode(',', $zipcode->zip);
                foreach ($exps as $exp){
                    $results[] = ['text' => $exp, 'id' => $exp];
                }
            }
            else{
                $results[] = ['text' => $zipcode->zip, 'id' => $zipcode->zip];
            }
        }

        return Response::json($results);
    }

    /**
     * Update Zipcodes
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateZipcode(ZipcodeUpdateRequest $request)
    {
        //Session::forget('zipcode_default');
        Session::put('zipcode_default', $request->get('default_zipcode'));

        return redirect()->back()->with('success', trans('zipcode::lang.zipcode_update_success'));
    }

}
