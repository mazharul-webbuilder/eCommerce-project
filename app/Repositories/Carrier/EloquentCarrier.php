<?php

namespace App\Repositories\Carrier;

use App\Models\Carrier;
use App\Repositories\BaseRepository;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EloquentCarrier extends EloquentRepository implements BaseRepository, CarrierRepository
{
    protected $model;

    public function __construct(Carrier $carrier)
    {
        $this->model = $carrier;
    }

    public function all()
    {
        if (!Auth::user()->isFromPlatform()) {
            return $this->model->mine()->with('image', 'shippingZones')->get();
        }

        return $this->model->with('image', 'shippingZones')->get();
    }

    public function trashOnly()
    {
        if (!Auth::user()->isFromPlatform()) {
            return $this->model->mine()->with('image')->onlyTrashed()->get();
        }

        return $this->model->with('image')->onlyTrashed()->get();
    }

    public function massDestroy($ids)
    {
        $carriers = $this->model->withTrashed()->whereIn('id', $ids)->get();

        foreach ($carriers as $carrier) {
            $carrier->flushImages();
        }

        return parent::massDestroy($ids);
    }

    public function emptyTrash()
    {
        $carriers = $this->model->onlyTrashed()->get();

        foreach ($carriers as $carrier) {
            $carrier->flushImages();
        }

        return parent::emptyTrash();
    }
}
