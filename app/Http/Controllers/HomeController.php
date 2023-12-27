<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
   
   public function store(Request $req){
          $contact = new Contact();


          $message = [
               'name.required' => "You have put your name",
               'email.required' => "please put your email",
               'email.email' => "please enter valid email"
          ];

        $validate =  $req->validate([
               'name' => 'required|min:4',
               'email' => 'required|email',
               'subject' => 'required|min:5',
               'message' => 'required|min:5'

          ],$message);

          if($validate){
               $data = [
                    'name'=> $req->name,
                    'email'=> $req->email,
                    'subject'=> $req->subject,
                    'message'=> $req->message,
               ];
               $contact->insert($data);
               return redirect('contact')->with('msg','We received your message');

              ;
          }
              
   }
   public function contactList(){
     $contacts = Contact::all();
     $data['messages'] = $contacts;
     return view('contactList',$data);
   }
  


}
