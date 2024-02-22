<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $images = Portfolio::pluck('image')->toArray();
        return view('pages .portfolio', compact('portfolios', 'images')); //compact('banners'));
    }
}
