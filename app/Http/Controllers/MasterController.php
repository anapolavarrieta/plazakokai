<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MasterController extends Controller
{
    public function contactus(Request $request)
    {
        //ContactUS::create($request->all());

        $data = "algo";

        $contactName =  $request->input('nombre');
        $contactEmail =  $request->input('correo');
        $contactMessage =  $request->input('mensaje');

        $data = array('name'=>$contactName, 'email'=>$contactEmail, 'message'=>$contactMessage);


        $res = Mail::send('emails.contacto',$data, function ($message) {
			$message->from('gaby@kokai.com.mx','Hotel Kokai');
			$message->to('goop.19@gmail.com');
			$message->subject('[Contacto] Página Hotel');
 		});


        return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!'.$res);
    }
}
