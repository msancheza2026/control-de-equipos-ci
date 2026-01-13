<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AreaController extends BaseController
{
    public function index()
    {
        return view('areas/index');
    }
}
