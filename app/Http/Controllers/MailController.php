<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FirstLessonMail;
use App\Mail\NewsLetter;
use App\Mail\ContactLetter;
use App\MainSettings;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'surname' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required',
            'city' => 'required',
        ]); 
        
        // $email = \App\Setting::all();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $modules["MainSettings"] = MainSettings::get()[0];

        \Mail::to($modules["MainSettings"]->email)->send(new FirstLessonMail($request->name, $request->surname, $request->email, $request->phone, $request->city));        
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }

    public function newssend(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email',
        ]); 
        
        // $email = \App\Setting::all();

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $modules["MainSettings"] = MainSettings::get()[0];

        \Mail::to($modules["MainSettings"]->email)->send(new NewsLetter($request->email));        
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }

    public function contactsend(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
        ]); 
        
        // $email = \App\Setting::all();
        $modules["MainSettings"] = MainSettings::get()[0];

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        \Mail::to($modules["MainSettings"]->email)->send(new ContactLetter($request->name, $request->email, $request->phone));        
        return response()->json(['message' => 'Сообщение успешно отправлено!']);
    }
}
