<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Services;

class ServicesController extends Controller
{
    public function service()
    {
        $services = Services::all();
        $images = Services::pluck('image')->toArray();
        return view('pages .services', compact('services', 'images')); //compact('banners'));
    }

}
