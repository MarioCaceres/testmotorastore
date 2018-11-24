@extends('layouts.app')
@section('content')
<div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>Nueva Venta</strong><small> manual</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Producto ID</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Nombre Producto</label><input type="text" id="vat" placeholder="DE1234567890" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Valor</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label for="city" class=" form-control-label">Comprador</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Dirección de envio</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Ciudad</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
                            </div>
                            <a href="forms-basic.html" type="button" class="btn btn-primary">Añadir Venta</a>
                        </div>
                    </div>



                            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

@endsection