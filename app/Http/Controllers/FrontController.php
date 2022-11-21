<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }
    public function cars(Request $request)
    {
       return view('front.cars');

    }
    public function about(Request $request)
    {
       return view('front.about');

    }
    public function contact(Request $request)
    {
       return view('front.contact');

    }
    public function partialContent($type=null)
    {
        if(!empty($type))
        {
            if($type == 'home')
            {
                return view('front.partial-content.home');
            }
            if($type == 'cars')
            {
                return view('front.partial-content.cars');
            }
            if($type == 'about')
            {
                return view('front.partial-content.about');
            }
            if($type == 'contact')
            {
                return view('front.partial-content.contact');
            }
            
        }
    }
}
