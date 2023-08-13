<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use App\Http\Resources\SystemConfigResource;

class HomeController extends Controller
{
  /**
   * Get system's default configs.
   *
   * @return \Illuminate\Http\Response
   */
  public function system_configs()
  {
    $config = (object) config('system_settings');

    return  new SystemConfigResource($config);
  }
}
