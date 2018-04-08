@extends('layouts._master')

@section ('content')
<div class="container center">
    <div class="row">
        <div class="col-sm-1 align-self-center">
        </div>
        <div class="col-sm-10 align-self-center">
            <h2 id="contacto"> ¿Cómo podemos ayudarte? </h2>
        </div>
        <div class="col-sm-1 align-self-center">
        </div>
    </div>
    <div class="row">
        <form method='GET' action='/contactus/'>
            <div class="col-sm-1 center">
            </div>
            <div class="col-sm-5 center">
                    <div class="col-sm-12 " align="left">
                        <label for='nombre'>Nombre</label>
                        <input type='text' name='nombre' id='nombre' value=''  class="form-control" required>
                    </div>
                    <div class="col-sm-12 " align="left">
                        <label for='correo'>Correo</label>
                        <input type='text' name='correo' id='correo' value=''  class="form-control" required>
                    </div>
                    <div class="col-sm-12 " align="left">
                        <label for='celular'>Celular</label>
                        <input type='text' name='celular' id='celular' value=''  class="form-control">
                    </div>
                    <div class="col-sm-12 " align="left">
                        <label for='telefono'>Telefono</label>
                        <input type='text' name='telefono' id='telefono' value=''  class="form-control">
                    </div>
                       <div class="col-sm-12 " align="left">
                        <label for='mensaje'>Mensaje</label>
                        <textarea name='mensaje' id='mensaje' maxlength="500" rows="5"  class="form-control" ></textarea>
                    </div>
                    <div class="col-sm-12 " align="left">
                        <br>
                    </div>
                    <div class="col-sm-12 " align="center">
                        <input type='submit' value='Contactanos' class='btn btn-primary btn-small' required>
                    </div>
                    <div class="col-sm-12 " align="left">
                        <br>
                    </div>
                </div>

        </form>
        <div class="col-sm-5">
            <h2 class="fontBold fontBlack center">Ubicación</h2>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.705037994969!2d-86.82501728504457!3d21.1641335859252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2c01e9eac82d%3A0x344e80f34793d21b!2sHotel+Plaza+Kokai!5e0!3m2!1ses-419!2smx!4v1522990989175" width="350" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
@stop