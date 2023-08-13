<?php

namespace App\Repositories;

use Illuminate\Http\Request;

abstract class EloquentRepository
{
    public function all()
    {
        return $this->model->get();
    }

    public function trashOnly()
    {
        return $this->model->onlyTrashed()->get();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findTrash($id)
    {
        return $this->model->onlyTrashed()->findOrFail($id);
    }

    public function findBy($filed, $value)
    {
        return $this->model->where($filed, $value)->first();
    }

    public function recent($limit)
    {
        return $this->model->take($limit)->get();
    }

    public function store(Request $request)
    {
        $model = $this->model->create($request->all());

        // Can have multiple images
        if ($request->hasFile('images')) {
            foreach ($request->images as $type => $file) {
                $model->saveImage($file, $type);
            }
        }

        // When got a single image
        if ($request->hasFile('image')) {
            $model->saveImage($request->image);
        }

        return $model;
    }

    public function update(Request $request, $model)
    {
        $model = is_numeric($model) ? $this->model->findOrFail($model) : $model;

        $model->update($request->all());

        if ($request->input('delete_image')) {
            if (is_array($request->delete_image)) {
                foreach ($request->delete_image as $type => $value) {
                    $model->deleteImageTypeOf($type);
                }
            } else {
                $model->deleteImage();
            }
        }

        // Can have multiple images
        if ($request->hasFile('images')) {
            foreach ($request->images as $type => $file) {
                $model->updateImage($file, $type);
            }
        }

        // When got a single image
        if ($request->hasFile('image')) {
            $model->updateImage($request->image);
        }

        return $model;
    }

    public function trash($id)
    {
        return $this->model->findOrFail($id)->delete();
    }

    public function restore($id)
    {
        return $this->model->onlyTrashed()->findOrFail($id)->restore();
    }

    public function destroy($id)
    {
        $model = $this->model->onlyTrashed()->findOrFail($id);

        $model->flushImages();

        return $model->forceDelete();
    }

    public function massTrash($ids)
    {
        return $this->model->whereIn('id', $ids)->delete();
    }

    public function massRestore($ids)
    {
        return $this->model->onlyTrashed()->whereIn('id', $ids)->restore();
    }

    public function massDestroy($ids)
    {
        return $this->model->withTrashed()->whereIn('id', $ids)->forceDelete();
    }

    public function emptyTrash()
    {
        return $this->model->onlyTrashed()->forceDelete();
    }
}
