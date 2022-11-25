<?php

namespace App\Repositories\Interface;

use Illuminate\Support\Collection;

interface BaseInterface
{
    public function list() : Collection;
    public function create(array $attributes);
    public function find($id);
}
