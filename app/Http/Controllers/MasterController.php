<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MasterController extends Controller
{
    public function contactus(Request $request)
    {
        //ContactUS::create($request->all());

        $contactName =  urldecode($request->input('nombre'));
        $correo =  urldecode($request->input('correo'));
        $contactCel =  urldecode($request->input('celular'));
        $contactTel =  urldecode($request->input('telefono'));
        $contactMessage =  urldecode($request->input('mensaje'));


        $data = array('nombre'=>$contactName, 'correo'=>$correo, 'celular'=>$contactCel, 'telefono'=>$contactTel, 'mensaje'=>$contactMessage);
        $emails = array('goop.19@gmail.com', 'gaby@kokai.com.mx',$correo);

        $res = Mail::send('emails.contacto',$data, function ($message) use ($emails) {
			$message->from('ventash@kokai.com.mx','Hotel Kokai');
			$message->to($emails);
			$message->subject('[Contacto] Página Hotel');
 		});

 		//dump("ok");

        //return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        //return view('inicio')->with('success', '¡Gracias por contactarnos ,nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        ///return view('inicio')->with(['tipoMensaje'=>'success','mensaje'=>'¡Gracias por contactarnos, nos pondremos en contacto con usted tan pronto leamos su mensaje!']);
        //return view('layouts.prueba');
        return view('emails.contacto')->with($data);;
    }

    public function reserva(Request $request)
    {
        //ContactUS::create($request->all());

        $nombre =  urldecode($request->input('nombre'));
        $correo =  urldecode($request->input('correo'));
        $telefono =  urldecode($request->input('telefono'));
        $adultos =  urldecode($request->input('adultos'));
        $niños =  urldecode($request->input('niños'));
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
                'niños'=>$niños,
                'habitaciones'=>$habitaciones,
                'fechaEntrada'=>$fechaEntrada,
                'fechaSalida'=>$fechaSalida,
                'estDbl'=>$estDbl,
                'estKing'=>$estKing,
                'suite'=>$suite,
                'ph'=>$ph,
                'comentarios'=>$comentarios);

        $emails = array('goop.19@gmail.com', 'gaby@kokai.com.mx',$correo);

        $res = Mail::send('emails.reserva',$data, function ($message) use ($emails) {
			$message->from('ventash@kokai.com.mx','Hotel Kokai');
			$message->to($emails);
			$message->subject('[Reservación] Página Hotel');
 		});

 		//dump($emails);

        //return back()->with('success', '¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!');
        //return view('inicio')->with('success', '¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!');
        ///return view('inicio')->with(['tipoMensaje'=>'success','mensaje'=>'¡Gracias por reservar con nosotros, nos pondremos en contacto con usted tan pronto confirmemos disponibilidad!']);
        //return view('layouts.prueba');
        return view('emails.reserva')->with($data);;
    }
}
