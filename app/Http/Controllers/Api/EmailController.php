<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lead;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        //return 'return da store';
        $data = $request->all();

        //validazione
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required | email',
            'message' => 'required'

        ]);
        if ($validator->fails()) {
            return response()->json([
                $data,
                'success' => false,
                'error' => $validator->errors()
            ]);
        } else {
            /* return response()->json([
                $data,
                'success' => true,
            ]); */
            $new_lead = new Lead();

            $new_lead->fill($data);
            $new_lead->save();
            Mail::to('admin@me.com')->send(new SendEmail($new_lead));
        }
    }
}
