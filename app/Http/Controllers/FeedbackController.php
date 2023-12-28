<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   public function Feedback(){
     $feedback = Feedback::all();
     $sadid['messages'] = $feedback;
     return view('feedbackList',$sadid);

   }
}
