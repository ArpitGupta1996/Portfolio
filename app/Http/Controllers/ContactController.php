<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request){


        $validator = Validator::make($request->all(),[
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator)->errors()->first();
        }

        else{
            $contact_data = new Contact();

            $contact_data->name = $request->name;
            $contact_data->email = $request->email;
            $contact_data->subject = $request->subject;
            $contact_data->message = $request->message;

            $contact_data->save();


            //contact form Mail function starts here
            Mail::send('contact_mail', array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'message' => $request->get('message')
            ), function($message) use($request){
                $message->from($request->email);
                $message->to('68arpit@gmail.com');
                $message->subject('New Request');
            });

            return back()->with('success', 'Thank you for contacting us');


            // return redirect()->back()->with('message', 'Query Submitted Succesfully');

        }
    }
}
