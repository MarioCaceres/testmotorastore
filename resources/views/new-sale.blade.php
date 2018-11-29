@extends('layouts.app')
@section('content')
<style>
    #nuevo_producto {
      text-align: center;
    }
    #grande {
      zoom: 1.5;
      transform: scale(1.5);
      -ms-transform: scale(1.5);
      -webkit-transform: scale(1.5);
      -o-transform: scale(1.5);
      -moz-transform: scale(1.5);
      transform-origin: 0 0;
      -ms-transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
      -o-transform-origin: 0 0;
      -moz-transform-origin: 0 0;
      -webkit-transform-origin: 0 0;
    }
</style>
<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Nueva Venta</strong><small> manual</small></div>
                            <div class="card-body card-block">
                                <div class = "row">
                                    <div class = "col-lg-3"><h3>Nombre Cliente:</h3>{{$cliente->nombre}}</div>
                                    <div class = "col-lg-3"><h3>Telefono: </h3>{{$cliente->telefono}}</div>
                                    <div class = "col-lg-3"><h3>Dirección: </h3>{{$cliente->direccion}}</div>
                                    <div class = "col-lg-3"><h3>Correo: </h3>{{$cliente->correo}}</div>
                                </div>
                                
                                <br><br>
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Producto</th>
                                      <th scope="col">Cantidad</th>
                                      <th scope="col">Precio Unitario</th>
                                      <th scope="col">Total</th>
                                      <th scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                    @foreach($carrito as $key=>$item)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$item->nombre}}</td>
                                                    <td>{{$item->cantidad}}</td>
                                                    <td>{{$item->precio}}</td>
                                                    <td>{{$item->total}}</td>
                                                </tr>
                                    @endforeach
                                    
                                    
                                  </tbody>
                                </table>

                                <!-- Button trigger modal -->
                                <div id = "nuevo_producto">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  {{$texto_boton}}
                                </button>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Lista Productos</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    <form class="form-container" method="post" action="{{ route('ventaController.addItem',$id_cliente_actual) }}">
                                    {{ csrf_field() }}
                                      <div class="modal-body">

                                            <table class="table">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Producto</th>
                                                  <th scope="col">Stock</th>
                                                  <th scope="col">Precio</th>
                                                  <th scope="col">Cantidad</th>
                                                  <th scope="col">Añadir</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($productos as $key=>$p)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$p->nombre}}</td>
                                                    <td>{{$p->stock}}</td>
                                                    <td>{{$p->precio}}</td>
                                                    <td><input type="number" min="1" max="{{$p->stock}}" step="1" value="1" id ="n{{$p->id}}" name= "numeros[{{$p->id}}]"/></td>
                                                    <td><div id="grande">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="1" id="c{{$p->id}}" name="check[{{$p->id}}]">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              </tbody>
                                            </table>
                                      
                                      </div>
                                    
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="sumbit" class="btn btn-primary">Agregar Producto(s)</button>
                                      </div>
                                    </form>
                                    </div>
                                  </div>
                                </div>













                            </div>
                            
                            

                            <!-- Button trigger modal -->
                                
                                <button type="button" <?php if ($lleno == '0'){ ?> disabled <?php   } ?> class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">
                                  Ingresar Venta
                                </button>
                                

                                <!-- Modal -->
                                <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmar Venta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                    
                                      <div class="modal-body">
                                        <h3>Está seguro que quiere ingresar la siguiente venta?</h3>
                                        <br><br>
                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <th scope="col">#</th>
                                              <th scope="col">Producto</th>
                                              <th scope="col">Cantidad</th>
                                              <th scope="col">Precio Unitario</th>
                                              <th scope="col">Total</th>
                                              <th scope="col"></th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @php($total = 0)
                                            @foreach($carrito as $key=>$item)

                                                        <tr>
                                                            <th scope="row">{{$key+1}}</th>
                                                            <td>{{$item->nombre}}</td>
                                                            <td>{{$item->cantidad}}</td>
                                                            <td>{{$item->precio}}</td>
                                                            <td>{{$item->total}}</td>
                                                        </tr>
                                                        @php($total+=intval($item->total))
                                            @endforeach
                                            
                                            
                                          </tbody>
                                        </table>
                                        <div align="center">
                                        <h3><b>Total: {{$total}}</b></h3>
                                        </div>
                                            
                                      
                                      </div>
                                    
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <a type="button" class="btn btn-primary" href="{{ route('ventaController.saveSale')}}">Confirmar Venta</a>
                                      </div>
                                    
                                    </div>
                                  </div>
                                </div>
                            
                        </div>
                    </div>



                            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

@endsection