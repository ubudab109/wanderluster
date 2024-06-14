<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function ourServices()
    {
        return view('pages.services');
    }

    /**
     * public function blabla() 
     * {
     *  return view('pages.nama_blade);
     * }
     */
}
