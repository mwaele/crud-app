<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    //
    public function index()
    {
        return view('pharmacy.index');
    }

    public function create()
    {}
}
