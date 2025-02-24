<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            'anime' => [
                ['title' => 'Naruto', 'genre' => 'Shonen', 'release_year' => 2002],
                ['title' => 'Sailor Moon', 'genre' => 'Shoujo', 'release_year' => 1992],
                ['title' => 'Death Note', 'genre' => 'Supernatural', 'release_year' => 2006],
                ['title' => 'Attack on Titan', 'genre' => 'Dark Fantasy', 'release_year' => 2013],
                ['title' => 'Sword Art Online', 'genre' => 'Sci-Fi', 'release_year' => 2012],
            ]
        ];

        return view('products.index', compact('products'));
    }
}
