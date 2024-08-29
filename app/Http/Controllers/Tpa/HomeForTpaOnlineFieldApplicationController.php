<?php

namespace App\Http\Controllers\Tpa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeForTpaOnlineFieldApplicationController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
