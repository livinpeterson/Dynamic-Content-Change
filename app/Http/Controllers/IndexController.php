<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;

class IndexController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('pages.index', compact('banners')); //compact('banners'));
    }

}
