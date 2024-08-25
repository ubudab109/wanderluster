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
        $cards = [
            ['title' => 'Petronas Tower', 'copy' => 'Experience the breathtaking view from the iconic Petronas Towers in Kuala Lumpur.', 'button' => 'Learn More', 'image' => 'assets/img/malaysiagrup1.jpg'],
            ['title' => 'Batu Caves', 'copy' => 'Explore the magnificent Batu Caves, a limestone hill with a series of caves and cave temples.', 'button' => 'Learn More', 'image' => 'assets/img/malaysiagrup2.jpg'],
            ['title' => 'Genting Skyworld', 'copy' => 'Enjoy the thrilling rides and attractions at Genting Skyworld, a popular theme park in Malaysia.', 'button' => 'Learn More', 'image' => 'assets/img/malaysiagrup3.png'],

        ];

        return view('pages.grouptour', ['cards' => $cards]);
        
     
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

    public function contact()
    {
        return view('pages.contact');
    }



    /**
     * public function blabla() 
     * {
     *  return view('pages.nama_blade);
     * }
     */
}
