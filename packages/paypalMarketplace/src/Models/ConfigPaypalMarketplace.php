<?php

namespace Incevio\Package\PaypalMarketplace\Models;

use App\Models\BaseModel;
// use App\Common\PackageConfig;

class ConfigPaypalMarketplace extends BaseModel
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'config_paypal_marketplace';

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
    'merchant_id',
    'account_email',
  ];

  /**
   * Setters.
   */
  public function setAccountAttribute($value)
  {
    $this->attributes['account'] = trim($value);
  }
  public function setClientIdAttribute($value)
  {
    $this->attributes['client_id'] = trim($value);
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
