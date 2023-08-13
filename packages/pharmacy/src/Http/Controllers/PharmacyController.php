<?php

namespace Incevio\Package\Pharmacy\Http\Controllers;

use App\Models\Product;
use App\Models\Inventory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Incevio\Package\pharmacy\Http\Requests\PharmacyRequest;
use Carbon\Carbon;

class PharmacyController extends Controller
{

    /**
     * Inspected Items
     */
    public function index()
    {
        $data = get_from_option_table('pharmacy_items', []);

        $start_time = isset($data['start_time']) ? $data['start_time'] : Null;
        $end_time = isset($data['end_time']) ? $data['end_time'] : Null;

        $listings = isset($data['listings']) ?
            Inventory::whereIn('id', $data['listings'])->get()->pluck('title', 'id')->toArray() : [];

        $featured = isset($data['featured']) ?
            Inventory::whereIn('id', $data['featured'])->get()->pluck('title', 'id')->toArray() : [];

        return view('pharmacy::settings', compact('start_time', 'end_time', 'listings', 'featured'));
    }

    //Creating Flash deal
    public function create(PharmacyRequest $request)
    {
        $data = [
            'start_time' => Carbon::createFromDate($request->get('start_time')),
            'end_time' => Carbon::createFromDate($request->get('end_time')),
            'listings' => $request->listings,
            'featured' => $request->featured
        ];

        $create = DB::table(get_option_table_name())->updateOrInsert(
            ['option_name' => 'pharmacy_items'],
            [
                'option_name' => 'pharmacy_items',
                'option_value' => serialize($data),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        if ($create) {
            // Clear cached value
            Cache::forget('pharmacy');

            return back()->with('success', trans('pharmacy::lang.created'));
        }

        return back()->with('error', trans('pharmacy::lang.failed'));
    }
}
