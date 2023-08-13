<?php

namespace Incevio\Package\Eventy\Models;

use App\Models\Customer;
use App\Models\Shop;
use Carbon\Carbon;
use App\Models\BaseModel;
use App\Common\Imageable;
// use App\Common\Taggable;

class Event extends BaseModel
{
    use Imageable;

    const STATUS_ACTIVE     = 1; // Default
    const STATUS_INACTIVE   = 2;

    protected $table = 'events';



    /**
     * The attributes that should be casted to boolean types.
     *
     * @var array
     */
    protected $casts = [
        'starts' => 'datetime',
        'ends' => 'datetime',
        'public' => 'boolean',    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title','slug','description','venue','map_link','shop_id','starts','ends','status','public'];

    /**
     * Get the shop of the inventory.
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }


    /**
     * get the list of events of the customer.
     */
    public function customers(){
        return $this->belongsToMany(Customer::class);
    }

    /**
     * Scope a query to active post.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    /**
     * Scope a query to active post.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOpen($query)
    {
        return $query->where('ends', '>', Carbon::now());
    }

    /**
     * Scope a query to active post.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePast($query)
    {
        return $query->where('ends', '<', Carbon::now());
    }

    public function setStartsAttribute($value)
    {
        if($value) $this->attributes['starts'] = Carbon::createFromFormat('Y-m-d h:i a', $value);
    }
    public function setEndsAttribute($value)
    {
        if($value) $this->attributes['ends'] = Carbon::createFromFormat('Y-m-d h:i a', $value);
    }

    /**
     * Return status text
     */
    public function getTypeAttribute()
    {
        switch ($this->public) {
            case 0: return '<span class="label label-primary indent10">' . trans('eventy::lang.private') . '</span>';
            case 1: return '<span class="label label-outline indent10">' . trans('eventy::lang.public') . '</span>';
        }
    }

    /**
     * Return status text
     */
    public function statusName()
    {
        switch ($this->status) {
            case static::STATUS_ACTIVE: return '<span class="label label-outline indent10">' . trans('eventy::lang.active') . '</span>';

            case static::STATUS_INACTIVE: return '<span class="label label-default indent10">' . trans('eventy::lang.inactive') . '</span>';
        }
    }
}
