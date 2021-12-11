<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function sendcontact(Request $request){

        $client= new contact;
        
        $client->name=$request->name;
        $client->email=$request->email;
        $client->message=$request->message;

        $client->save();
        
        return redirect()->back()->with('message','Message sent');
    }

}