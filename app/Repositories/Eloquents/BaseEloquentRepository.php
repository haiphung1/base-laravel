<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Interface\BaseInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BaseEloquentRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function list() : Collection
    {
        return $this->model->all();
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
}
