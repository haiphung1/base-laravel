<?php

namespace App\Repositories\Eloquents;

use App\Model\User;
use App\Repositories\Interface\UserInterface;
use Illuminate\Support\Collection;

class UserEloquentRepository extends BaseEloquentRepository implements UserInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }
}
