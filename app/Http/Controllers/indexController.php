<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index() {
        return view ('index') ;
    }

    public function send(Request $request){

        $data = array('name'     => $request->name,
                      'email'    => $request->email,
                      'subject'  => $request->subject,
                      'message'  => $request->message);
  
        Mail::to('safashomakhi@gmail.com')->send(new SendMail($data));
        return back()->with('success','تم الارسال بنجاح , شكرا لك لتواصلك معنا ');
      }
  
      public function rules(){
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
      }
}
