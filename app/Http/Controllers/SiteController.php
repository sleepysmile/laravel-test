<?php

namespace App\Http\Controllers;

use App\Models\Publication;

class SiteController extends Controller
{
    /**
     * Index route controller
     */
    public function __invoke()
    {
        $publication = Publication::all();
        
        return view('site.index', ['publication' => $publication]);
    }
}