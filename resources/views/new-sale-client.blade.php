@extends('layouts.app')
@section('content')

<style>


/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #23a500;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #23a500;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Nueva Venta</strong><small> Cliente</small></div>
                            <div class="card-body card-block">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Telefono</th>
                                  <th scope="col">Dirección</th>
                                  <th scope="col">Correo</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($clientes as $key=>$c)
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                    <td>{{$c->nombre}}</td>
                                    <td>{{$c->telefono}}</td>
                                    <td>{{$c->direccion}}</td>
                                    <td>{{$c->correo}}</td>
                                    <td><a href="{{ route('ventaController.new', array('id' => $c->id)) }}" type="button" class="btn btn-primary">Siguiente</a></td>
                                </tr>
                                @endforeach
                                
                                
                                
                              </tbody>
                            </table>
                            </div>
                        </div>
                    </div>



                </div>


                <button class="open-button" onclick="openForm()">Nuevo Cliente</button>

                <div class="form-popup" id="myForm">
                  <form  class="form-container" method="post" action="{{ route('clienteController.store') }}">
                  {{ csrf_field() }}
                    <h1>Nuevo Cliente</h1>

                    <label for="nombre"><b>Nombre</b></label>
                    <input type="text" placeholder="Pedro Martinez" name = "nombre" value="{{ old('nombre') }}" required>

                    <label for="telefono"><b>Telefono</b></label>
                    <input type="text" placeholder="994128572" name = "telefono" value="{{ old('telefono') }}" required>

                    <label for="direccion"><b>Dirección</b></label>
                    <input type="text" placeholder="Rafael Sotomayor 254, Santiago" name="direccion" value="{{ old('direccion') }}" required>

                    <label for="correo"><b>Correo</b></label>
                    <input type="text" placeholder="p.martinez58@gmail.com" name="correo" value="{{ old('correo') }}" required>

                    <button type="submit" class="btn">Crear</button>
                    <button type="button" class="btn cancel" onclick="closeForm()">Cerrar</button>
                  </form>
                </div>

                <script>
                function openForm() {
                    document.getElementById("myForm").style.display = "block";
                }

                function closeForm() {
                    document.getElementById("myForm").style.display = "none";
                }
                </script>


        </div><!-- .animated -->
    </div><!-- .content -->

@endsection