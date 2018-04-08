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

        $contactName =  utf8_encode(utf8_encode($request->input('nombre'));
        $contactEmail =  utf8_encode($request->input('correo'));
        $contactCel =  $request->input('celular');
        $contactTel =  $request->input('telefono');
        $contactMessage =  utf8_encode($request->input('mensaje'));

        $data = array('nombre'=>$contactName, 'correo'=>$contactEmail, 'celular'=>$contactCel, 'telefono'=>$contactTel, 'mensaje'=>$contactMessage);


        $res = Mail::send('emails.contacto',$data, function ($message) {
			$message->from('gaby@kokai.com.mx','Hotel Kokai');
			$message->to('goop.19@gmail.com');
			$message->subject('[Contacto] Página Hotel');
 		});


        return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!'.$res);
    }
}
