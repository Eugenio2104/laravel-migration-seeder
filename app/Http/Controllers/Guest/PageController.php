<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view(view: 'home');
    }

    public function trains()
    {
        $trains = Train::all();
        return view('trains', compact('trains'));
    }
}
