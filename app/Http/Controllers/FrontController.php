<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function home()
    {
        Session::put('title','Chesca Chen\'s Car Rental');
        return view('front.home');
    }
    public function cars(Request $request)
    {
        Session::put('title','Cars');
       return view('front.cars');

    }
    public function about(Request $request)
    {
        Session::put('title','About Us');
       return view('front.about');

    }
    public function contact(Request $request)
    {
        Session::put('title','Contact Us');
       return view('front.contact');

    }
    public function login(Request $request)
    {
        Session::put('title','Login');
       return view('front.login');

    }
    public function signup(Request $request)
    {
        Session::put('title','Signup');
       return view('front.signup');

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
            if($type == 'login')
            {
                return view('front.partial-content.login');
            }
            if($type == 'signup')
            {
                return view('front.partial-content.signup');
            }
            
        }
    }
}
