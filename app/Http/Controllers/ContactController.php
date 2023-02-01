<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
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


            return redirect()->back()->with('message', 'Query Submitted Succesfully');

        }
    }
}
