<?php

namespace App\Services;

use App\Repositories\Interface\UserInterface;

class UserService
{
    private $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function listUsers()
    {
        return $this->user->list();
    }
}
