<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Carrier;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CarrirResource;

class CarrierController extends Controller
{
  public function index()
  {
    $carriers = Carrier::mine()->paginate(config('mobile_app.view_listing_per_page', 8));

    return CarrirResource::collection($carriers);
  }
}
