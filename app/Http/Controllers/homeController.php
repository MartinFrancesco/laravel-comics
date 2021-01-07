<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        // return 'homepage';

       //Get comics list database
       $comics = config('comics');

       return view('home', compact('comics'));

    }

}
