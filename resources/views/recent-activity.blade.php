@extends('layouts.app')
@section('content')
    <!-- Content -->
    <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
                <!--  /Traffic -->
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Actividad reciente </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                    <th>ID</th>
                                                    <th>Usuario</th>
                                                    <th>Acción</th>
                                                    <th>Alerta</th>
                                                    <th>Deshacer acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                    <tr>
                                                            <td class="serial">1.</td>
                                                            <td> #5469 </td>
                                                            <td> <span class="product">Administrador</span> </td>
                                                            <td>Venta producto #04892</td>
                                                            <td>
                                                                
                                                            </td>
                                                            <td>
                                                                <a href="actividad-reciente.html"><i class="fa  fa-undo"></i>Deshacer</a>
                                                            </td>
                                                        </tr>    

                                                <tr>
                                                    <td class="serial">1.</td>
                                                    <td> #5469 </td>
                                                    <td> <span class="product">Motora Bag</span> </td>
                                                    <td>Venta producto #04892</td>
                                                    <td>
                                                            <span class="badge badge-danger">Posible error</span>
                                                    </td>
                                                    <td>
                                                        <a href="actividad-reciente.html"><i class="fa  fa-undo"></i>Deshacer</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                        <td class="serial">1.</td>
                                                        <td> #5469 </td>
                                                        <td> <span class="product">Administrador</span> </td>
                                                        <td>Venta producto #04892</td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            <a href="actividad-reciente.html"><i class="fa  fa-undo"></i>Deshacer</a>
                                                        </td>
                                                    </tr>  
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                    </div>
                </div>
                <!-- /.orders -->
            
                <!-- Calender Chart Weather  -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                       
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div style="visibility: hidden" class="card ov-h">
                            <div class="card-body bg-flat-color-2">
                                <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                            </div>
                            <div id="cellPaiChart" class="float-chart"></div>
                        </div> 
                        <!-- /.card -->
                    </div>
                    
                </div>
                <!-- /Calender Chart Weather -->
                <!-- Modal - Calendar - Add New Event -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
@endsection