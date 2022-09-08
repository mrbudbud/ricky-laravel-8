<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $data = DB::table('film')->get();
        return $data;
    }
}
