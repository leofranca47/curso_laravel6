<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TesteController extends Controller
{
    public function teste()
    {
        return 'testeController';
    }

    public function welcome()
    {
        return view('welcome');
    }
}
