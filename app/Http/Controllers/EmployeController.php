<?php

namespace App\Http\Controllers;

use App\Models\Service;

class EmployeController extends Controller
{
    public function employesParService()
    {
        $services = Service::with('personnels')->get();
        return view('employes_par_service', compact('services'));
    }
}
