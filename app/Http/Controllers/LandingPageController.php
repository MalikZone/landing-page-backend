<?php

namespace App\Http\Controllers;

use App\Models\Testing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    public function index(){
        return view('landing-page');
    }
}
