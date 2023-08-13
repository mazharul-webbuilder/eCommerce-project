<?php

namespace Incevio\Package\Wallet\Models;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Eloquent\Model;


class Zipcode extends Model
{
    protected $table = "zipcodes";

    /**
     * @var array
     */
    protected $fillable = [
        'country_id',
        'state_id',
        'city',
        'zip',
        'lat',
        'lng',
        'timezone',
        'daylight_savings',
    ];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_id');
    }

}
