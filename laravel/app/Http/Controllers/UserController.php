<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from users');
        echo '<pre>';
        var_dump($data);
    }
}