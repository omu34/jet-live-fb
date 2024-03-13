<?php

namespace App\Http\Controllers;

use App\Models\Facebook;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function index()
    {
        $facebooks = Facebook::all();
        return view('facebook', compact('facebooks'));
    }
}