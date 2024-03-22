<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use App\Models\Service;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        $services = Service::with('personnels')->get();
        $personnels = Personnel::all();

       return view('welcome', compact('services', 'personnels'));
    }
}
