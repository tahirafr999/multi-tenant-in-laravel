<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestCOntroller extends Controller
{
    public function list(){
        return DB::connection('mysql2')->table('list')->get();
    }
}
