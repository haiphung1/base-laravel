<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        dd($this->userService->listUsers());
    }
}
