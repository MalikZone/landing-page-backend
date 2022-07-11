<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getAllService(){
        $services = Service::all();
        return response()->json([
            'status' => true,
            'message' => 'data service',
            'data' => $services
        ]);
    }
}
