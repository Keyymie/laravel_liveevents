<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function partner()
    {
        return view('partenaires.index');
    }
}
