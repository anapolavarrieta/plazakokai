<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MasterController extends Controller
{
    public function contactus(Request $request)
    {
        //ContactUS::create($request->all());

        $nombre =  urldecode($request->input('nombre'));
        $correo =  urldecode($request->input('correo'));
        $celular =  urldecode($request->input('celular'));
        $telefono =  urldecode($request->input('telefono'));
        $mensajeCont =  urldecode($request->input('mensaje'));


        $data = array('nombre'=>$nombre, 'correo'=>$correo, 'celular'=>$celular, 'telefono'=>$telefono, 'mensaje'=>$mensajeCont);
        $emails = array('ventash@kokai.com.mx',$correo);
        $emailsBCC = array('oscar@kokai.com.mx','recepcion@kokai.com.mx');

        $res = Mail::send('emails.contacto',$data, function ($message) use ($emails, $emailsBCC) {
			$message->from('ventash@kokai.com.mx','Hotel Kokai');
			$message->to($emails);
			$message->bcc($emailsBCC);
			$message->subject('[Contacto] Página Hotel');
 		});

 		//dump("ok");

        //return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        //return view('inicio')->with('success', '¡Gracias por contactarnos ,nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        return view('inicio')->with(['tipoMensaje'=>'success','mensaje'=>'¡Gracias por contactarnos, nos pondremos en contacto con usted tan pronto leamos su mensaje!']);
        //return view('layouts.prueba');
        ///return view('emails.contacto')->with($data);
    }

    public function reserva(Request $request)
    {
        //ContactUS::create($request->all());

        $nombre =  urldecode($request->input('nombre'));
        $correo =  urldecode($request->input('correo'));
        $telefono =  urldecode($request->input('telefono'));
        $adultos =  urldecode($request->input('adultos'));
        $ninos =  urldecode($request->input('ninos'));
        $habitaciones =  urldecode($request->input('habitaciones'));
        $fechaEntrada =  urldecode($request->input('fechaEntrada'));
        $fechaSalida =  urldecode($request->input('fechaSalida'));
        $estDbl =  urldecode($request->input('estDbl'));
        $estKing =  urldecode($request->input('estKing'));
        $suite =  urldecode($request->input('suite'));
        $ph =  urldecode($request->input('ph'));
        $comentarios =  urldecode($request->input('comentarios'));


        $data = array('nombre'=>$nombre,
                'correo'=>$correo,
                'telefono'=>$telefono,
                'correo'=>$correo,
                'adultos'=>$adultos,
                'ninos'=>$ninos,
                'habitaciones'=>$habitaciones,
                'fechaEntrada'=>$fechaEntrada,
                'fechaSalida'=>$fechaSalida,
                'estDbl'=>$estDbl,
                'estKing'=>$estKing,
                'suite'=>$suite,
                'ph'=>$ph,
                'comentarios'=>$comentarios);

        $emails = array('ventash@kokai.com.mx',$correo);
        $emailsBCC = array('oscar@kokai.com.mx','recepcion@kokai.com.mx');

        $res = Mail::send('emails.reserva',$data, function ($message) use ($emails, $emailsBCC) {
			$message->from('ventash@kokai.com.mx','Hotel Kokai');
			$message->to($emails);
			$message->bcc($emailsBCC);
			$message->subject('[Reservación] Página Hotel');
 		});

 		//dump($emails);

        //return back()->with('success', '¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!');
        //return view('inicio')->with('success', '¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!');
        return view('inicio')->with(['tipoMensaje'=>'success','mensaje'=>'¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!']);
        //return view('layouts.prueba');
        ///return view('emails.reserva')->with($data);;
    }
}
