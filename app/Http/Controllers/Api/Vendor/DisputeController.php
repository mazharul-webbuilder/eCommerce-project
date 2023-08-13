<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Models\Order;
use App\Models\Dispute;
use App\Helpers\ListHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DisputeResource;
use App\Http\Requests\Validations\OrderDetailRequest;

class DisputeController extends Controller
{

  /**
   * All disoutes
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $disputes = Dispute::mine()->get();

    $disputes = $disputes->paginate(config('mobile_app.view_listing_per_page', 8));

    return DisputeResource::collection($disputes);
  }

  public function show(Request $request, Dispute $dispute)
  {
    // Check Permission

    return new DisputeResource($dispute);
  }
}
