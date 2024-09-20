<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $data = [];
    protected $perPage = 8;

    public function __construct()
    {
        //
    }

    // protected function loadSentra($view, $data = [])
    // {
    //     return view('sentra/'. env('APP_THEME', 'default') . '/' . $view, $data);
    // }
}
