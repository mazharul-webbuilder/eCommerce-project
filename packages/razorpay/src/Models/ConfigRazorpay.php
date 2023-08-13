<?php

namespace Incevio\Package\Razorpay\Models;

use App\Models\BaseModel;
// use App\Common\PackageConfig;

class ConfigRazorpay extends BaseModel
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'config_razorpay';

  /**
   * The database primary key used by the model.
   *
   * @var string
   */
  protected $primaryKey = 'shop_id';

  /**
   * The attributes that should be casted to boolean types.
   *
   * @var array
   */
  protected $casts = [
    'sandbox' => 'boolean',
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'shop_id',
    'api_key',
    'secret',
    'sandbox',
  ];

  /**
   * Setters.
   */
  public function setApiKeyAttribute($value)
  {
    $this->attributes['api_key'] = trim($value);
  }
  public function setSecretAttribute($value)
  {
    $this->attributes['secret'] = trim($value);
  }
  public function setSandboxAttribute($value)
  {
    $this->attributes['sandbox'] = (bool) $value;
  }
}
