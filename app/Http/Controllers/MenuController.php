<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function transportation()
    {
        return view('pages.transportation');
    }

    public function  grouptour()
    {
        return view('pages.grouptour');
    }

    public function personalizetrip()
    {
        return view('pages.personalizetrip');
    }

    public function eventtrip()
    {
        return view('pages.eventtrip');
    }

    public function destination()
    {
        return view('pages.destination');
    }

    public function tourtravel()
    {
        return view('pages.tourtravel');
    }



    /**
     * public function blabla() 
     * {
     *  return view('pages.nama_blade);
     * }
     */
}
