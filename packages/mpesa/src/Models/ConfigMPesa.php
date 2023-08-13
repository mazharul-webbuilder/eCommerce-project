<?php

namespace Incevio\Package\MPesa\Models;

use App\Models\BaseModel;
// use App\Common\PackageConfig;

class ConfigMPesa extends BaseModel
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'config_mpesa';

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
    'consumer_key',
    'consumer_secret',
    'short_code',
    'mpesa_passkey',
    'lipa_na_mpesa',
    'sandbox',
  ];

  /**
   * Setters.
   */
  public function setConsumerKeyAttribute($value)
  {
    $this->attributes['consumer_key'] = trim($value);
  }
  public function setConsumerSecretAttribute($value)
  {
    $this->attributes['consumer_secret'] = trim($value);
  }
  public function setShortCodeAttribute($value)
  {
    $this->attributes['short_code'] = trim($value);
  }
  public function setMpesaPasskeyAttribute($value)
  {
    $this->attributes['mpesa_passkey'] = trim($value);
  }
  public function setLipaNaMpesaAttribute($value)
  {
    $this->attributes['lipa_na_mpesa'] = trim($value);
  }
  public function setSandboxAttribute($value)
  {
    $this->attributes['sandbox'] = (bool) $value;
  }
}
