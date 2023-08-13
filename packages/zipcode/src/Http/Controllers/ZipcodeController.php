<?php

namespace Incevio\Package\Zipcode\Http\Controllers;

use App\Helpers\ListHelper;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Incevio\Package\Wallet\Models\Zipcode;
use Incevio\Package\zipcode\Http\Requests\ZipcodeCreateRequest;
use Incevio\Package\zipcode\Http\Requests\ZipcodeUpdateRequest;

class ZipcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = ListHelper::countries();
        $timezones = ListHelper::timezones();

        return view('zipcode::settings', compact('countries', 'timezones'));
    }

    /** Search Zipcodes*/
    public function searchZipcode(Request $request)
    {
        $term = $request->input('q');
        $results = [];

        if (strlen($term) < 3) {
            return Response::json($results);
        }

        $zipcodes = DB::table('zipcodes')->where('zip', 'LIKE', '%' . $term . '%')->take(10)->get();

        foreach ($zipcodes as $zipcode) {
            if (Str::contains($zipcode->zip, ',')) {
                $exps = explode(',', $zipcode->zip);

                foreach ($exps as $exp) {
                    $results[] = ['text' => $exp, 'id' => $exp];
                }
            } else {
                $results[] = ['text' => $zipcode->zip, 'id' => $zipcode->zip];
            }
        }

        return Response::json($results);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function updateDefaultZipcode(Request $request)
    {
        $zipcode = $request->get('default_zipcode');

        Session::put('zipcode_default', $zipcode);

        $redirect = redirect()->route(config('zipcode.routes.settings'));

        if (update_option_table_record('zipcode_default', $zipcode)) {
            return $redirect->with('success', trans('zipcode::lang.update_success'));
        }

        return $redirect->with('error', trans('zipcode::lang.failed'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function createZipcode(ZipcodeCreateRequest $request)
    {
        $zips = implode(',', $request->get('zipcodes'));

        $request->merge(['zip' => $zips]);

        $redirect = redirect()->route(config('zipcode.routes.settings'));

        if (Zipcode::create($request->all())) {
            return $redirect->with('success', trans('zipcode::lang.create_success'));
        }

        return $redirect->with('error', trans('zipcode::lang.failed'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function importZipcode(Request $request)
    {
        return view('zipcode::import');
    }

    ///Download Template
    public function downloadTemplate()
    {
        $pathToFile = base_path("packages/zipcode/zipcode.csv");

        return response()->download($pathToFile);
    }

    /* public function uploadZipcode(Request $request){

   /* public function uploadZipcode(Request $request) {
        $path = $request->file('products')->getRealPath();
        $records = array_map('str_getcsv', file($path));
        // Validations check for csv_import_limit
        if ( (count($records) - 1) > get_csv_import_limit() ) {
            $err = (new MessageBag)->add('error', trans('validation.upload_rows', ['rows' => get_csv_import_limit()]));
            return redirect()->route('zipcode.routes.settings') ->withErrors($err);
        }
        // Get field names from header column
        $fields = array_map('strtolower', $records[0]);
        // Remove the header column
        array_shift($records);
        foreach ($records as $record) {
            if (count($fields) != count($record)) {
                $err = (new MessageBag)->add('error', trans('validation.csv_upload_invalid_data'));
                return redirect()->route('zipcode.routes.settings')->withErrors($err);
            }
            // Set the field name as key
            $temp = array_combine($fields, $record);

            $temp = (clear_encoding_str($temp));
            // Get the clean data

            Zipcode::create([
                'country' => $temp['country_code'],
                'state' => $temp['state_code'],
                'city' => $temp['city_code'],
                'zip' => $temp['zipcode'],
                'lat' => $temp['latitude'],
                'lng' => $temp['longitude'],
                'timezone' => $temp['timezone'],
                'daylight_savings' => $temp['daylight_savings']
            ]);
        }
        return redirect()->route(config('zipcode.routes.settings'))->with('success', trans('zipcode::lang.upload_success'));
    }*/
}
