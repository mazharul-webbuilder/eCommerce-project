<?php

namespace App\Repositories\AttributeValue;

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Repositories\BaseRepository;
use App\Repositories\EloquentRepository;
use Illuminate\Http\Request;

class EloquentAttributeValue extends EloquentRepository implements BaseRepository, AttributeValueRepository
{
    protected $model;

    public function __construct(AttributeValue $attributeValue)
    {
        $this->model = $attributeValue;
    }

    public function create($id = null)
    {
        return $id ? Attribute::find($id) : null;
    }

    public function getAttribute($id)
    {
        return Attribute::findOrFail($id);
    }

    public function massDestroy($ids)
    {
        $attributes = $this->model->withTrashed()->whereIn('id', $ids)->get();

        foreach ($attributes as $attribute) {
            $attribute->flushImages();
        }

        return parent::massDestroy($ids);
    }

    public function emptyTrash()
    {
        $attributes = $this->model->onlyTrashed()->get();

        foreach ($attributes as $attribute) {
            $attribute->flushImages();
        }

        return parent::emptyTrash();
    }

    public function reorder(array $attributeValues)
    {
        foreach ($attributeValues as $id => $order) {
            $this->model->findOrFail($id)->update(['order' => $order]);
        }

        return true;
    }
}
