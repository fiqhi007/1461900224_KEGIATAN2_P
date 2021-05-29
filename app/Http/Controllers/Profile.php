<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Profile extends Controller
{
    //
    function index()
    {
        $data= DB::table('mahasiswa')->get();
        print_r($data);
    }
}
