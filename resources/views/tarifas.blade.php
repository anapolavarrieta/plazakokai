@extends('layouts._master')

@section ('content')
<div class="container">
    <div class"row">
        <div class="col-md-6">
            <div class="container">
                <div class="row font100">
                        <br>
                </div>
                <div class="row">
                    <div class="col-md-6 font200 center">
                        <h2 class="fontBold">R E S E R V A</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form method='GET' action='/contactus/'>
                            <div class="col-sm-6 form-group required control-label" align="left">
                                <label for='nombre'>Nombre Reservación</label>
                                <input type='text' name='nombre' id='nombre' value=''  class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group required control-label" align="left">
                                <label for='correo'>Correo Reservación </label>
                                <input type='text' name='correo' id='correo' value=''  class="form-control" required>
                            </div>
                            <div class="col-sm-5 form-group required control-label" align="left">
                                <label for='celular'>Telefono <span class="font70"> ¿A dónde podemos llamarle?</span></label>
                                <input type='text' name='celular' id='celular' value=''  class="form-control" required>
                            </div>
                            <div class="col-sm-2 form-group required control-label" align="center">
                                <label for='adultos'>Adultos</label>
                                <input type='number' name='adultos' id='adultos' step='1' value='' class='float form-control' required>
                            </div>
                            <div class="col-sm-2 form-group required control-label" align="center">
                                <label for='niños'>Niños</label>
                                <input type='number' name='niños' id='niños' step='1' value='' class='float form-control' required>
                            </div>
                            <div class="col-sm-3 form-group required control-label" align="center">
                                <label for='habitaciones'>Habitaciones</label>
                                <input type='number' name='habitaciones' id='habitaciones' step='1' value='' class='float form-control' required>
                            </div>
                            <div class="col-sm-6 form-group required control-label" align="left">
                                <label for='fechaEntrada'>Fecha de Entrada</label>
                                <div class="input-group sd-container">
                                    <input type='date' name='fechaEntrada' id='fechaEntrada' value='' class="form-control" required>
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar">
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-6 form-group required control-label" align="left">
                                <label for='fechaSalida'>Fecha de Salida</label>
                                <div class="input-group">
                                    <input type='date' name='fechaSalida' id='fechaSalida' value='' class="form-control" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                </div>
                            </div>
                            <div class="row col-sm-12">
                                <div class="col-sm-2 " align="center">
                                </div>
                                <div class="col-sm-2 " align="center">
                                    <label for='estDbl'>Estandard Doble</label>
                                    <input type='number' name='estDbl' id='estDbl' step='1' value='' class='float form-control'>
                                </div>
                                <div class="col-sm-2 " align="center">
                                    <label for='estKing'>Estandard King</label>
                                    <input type='number' name='estKing' id='estKing' step='1' value='' class='float form-control'>
                                </div>
                                 <div class="col-sm-2 " align="center">
                                    <label for='suite'>Junior<br> Suite</label>
                                    <input type='number' name='suite' id='suite' step='1' value='' class='float form-control'>
                                </div>
                                <div class="col-sm-2" align="center">
                                    <label for='ph'>Pent-<br>House</label>
                                    <input type='number' name='ph' id='ph' step='1' value='' class='float form-control'>
                                </div>
                            </div>
                            <div class="col-sm-12 " align="left">
                                <label for='comentarios'>Comentarios <span class="font70"> Por favor, no proporcione información de tarjeta.</span></label></label>
                                <textarea name='comentarios' id='comentarios' maxlength="500" rows="3"  class="form-control" ></textarea>
                            </div>
                            <div class="col-sm-12 " align="center ">
                                <p class="fontBold">Gracias por completar el formulario, nos pondremos en contacto con usted para darle más detalles de su reservación.
                                Su reservación esta sujeta a disponibilidad y será confirmada por correo electrónico o por teléfono.</p>
                            </div>
                            <div class="col-sm-12 " align="left">
                                <br>
                            </div>
                            <div class="col-sm-10 " align="center">
                                <input type='submit' value='Reserva' class='btn btn-primary btn-small'>
                            </div>
                            <div class="col-sm-10 " align="left">
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <div class="row font100">
                        <br>
                </div>
                <div class="row">
                    <div class="col-md-6 font200 center">
                        <h2 class="fontBold">T A R I F A S</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 center fontBold font150">
                    </div>
                    <div class="col-md-4 center fontBold font150">
                        Reserva en la página y el desayuno va por nuestra cuenta.
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="row font50">
                            <br>
                        </div>
                         <img src="{{URL::asset('/images/Habitaciones/standar_doble.JPG')}}" class="img-responsive " alt="" >
                    </div>
                    <div class="col-md-4 black">
                        <div class="row center">
                            <h3 class="fontBold">
                                Habitación Estandard
                            </h3>
                        </div>
                        <div class="row center">
                            2 Camas Matrimoniales o 1 Cama King Size
                        </div>
                        <div class="row center">
                            <h3 class="fontBold">
                                $ 528 x Noche
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row white">
                    <br>
                </div>
                <div class="row">

                   <div class="col-md-4 black">
                        <div class="row center">
                            <h3 class="fontBold">
                                Junior Suite
                            </h3>
                        </div>
                         <div class="row center">
                                Cama King Size y Sofá Cama (max. 4 <i class="glyphicon glyphicon-user black"></i>)
                        </div>
                        <div class="row center">
                            <h3 class="fontBold">
                                $ 1228 x Noche
                            </h3>
                        </div>
                    </div>
                     <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="row font50">
                            <br>
                        </div>
                       <img src="{{URL::asset('/images/Habitaciones/suite2.JPG')}}" class="img-responsive " alt="" >
                    </div>
                </div>
                <div class="row">
                    <br>
                </div>
                <div class="row">
                     <div class="col-md-2 hidden-sm hidden-xs">
                        <div class="row font50">
                            <br>
                        </div>
                        <img src="{{URL::asset('/images/Habitaciones/pentHouse.png')}}" class="img-responsive " alt="" >
                    </div>
                    <div class="col-md-4 black">
                        <div class="row center">
                            <h3 class="fontBold">
                                Pent-House
                            </h3>
                        </div>
                         <div class="row center">
                            2 Habitaciones | 2 Baños | 2 Sofás Camas (max. 8 <i class="glyphicon glyphicon-user black"></i>)
                        </div>
                        <div class="row center">
                            <h3 class="fontBold">
                                $ 1750 x Noche
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row font200">
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@stop