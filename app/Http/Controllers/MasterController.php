<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MasterController extends Controller
{
    public function contactus(Request $request)
    {
        //ContactUS::create($request->all());

        $contactName =  "hola";//urldecode($request->input('nombre'));
        $contactEmail = "hola";// urldecode($request->input('correo'));
        $contactCel =  "hola";//urldecode($request->input('celular'));
        $contactTel =  "hola";//urldecode($request->input('telefono'));
        $contactMessage =  "hola";//urldecode($request->input('mensaje'));


        $data = array('nombre'=>$contactName, 'correo'=>$contactEmail, 'celular'=>$contactCel, 'telefono'=>$contactTel, 'mensaje'=>$contactMessage);


        $res = Mail::send('emails.contacto',$data, function ($message) {
			$message->from('gaby@kokai.com.mx','Hotel Kokai');
			$message->to('goop.19@gmail.com');
			$message->subject('[Contacto] Página Hotel');
 		});

 		//dump("ok");

        return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        //return view('layouts.prueba');
        //return view('emails.contacto')->with($data);;
    }
}
