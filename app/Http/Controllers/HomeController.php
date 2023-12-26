<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    // $data['title'] = "Home page";
    $data['welcome'] = "Welcome to Laravel";
    $data['fruits'] = ["Apple","Orange","Mango","Grape"];

    return view('home');
   }
   public function about(){
        //  $data['title'] = "Home page";
        return view('about');
   }
   public function contact(){
    
    return view('contact');
   }
   public function store(Request $request){
    
        echo $request->email;
   }


}
