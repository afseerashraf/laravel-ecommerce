<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

class HomepageController
{
    public function home(){
        return view('users.home');
    }
}
