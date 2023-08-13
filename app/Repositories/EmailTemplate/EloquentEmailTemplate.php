<?php

namespace App\Repositories\EmailTemplate;

use App\Models\EmailTemplate;
use App\Repositories\BaseRepository;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Facades\Auth;


class EloquentEmailTemplate extends EloquentRepository implements BaseRepository, EmailTemplateRepository
{
    protected $model;

    public function __construct(EmailTemplate $emailTemplate)
    {
        $this->model = $emailTemplate;
    }

    public function all()
    {
        return $this->model->mine()->get();
    }

    public function trashOnly()
    {
        return $this->model->mine()->onlyTrashed()->get();
    }
}
