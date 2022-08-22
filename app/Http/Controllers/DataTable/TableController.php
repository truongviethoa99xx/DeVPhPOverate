<?php

namespace App\Http\Controllers\DataTable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function index(){
        return view('table');
    }
}
