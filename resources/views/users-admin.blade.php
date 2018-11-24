@extends('layouts.app')
@section('content')
     <!-- Content -->
     <div class="content">
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Editar Usuarios</strong>
                                <a href="forms-basic.html" style="margin-left: 100px;" type="button" class="btn btn-primary">Añadir Usuario</a>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Cargo</th>
                                            <th>Permisos</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/1.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5469 </td>
                                            <td>  <span class="name">Louis Stanley</span> </td>
                                            <td> Administrador <a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> Puede Ver, Editar <a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> <a href="#"><i class="fa  fa-trash-o"></i>Eliminar</a> </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5468 </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td>
                                            <td> Vendedor <a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> Puede Ver Ventas, Editar Ventas<a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> <a href="#"><i class="fa  fa-trash-o"></i>Eliminar</a> </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5467 </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td>
                                            <td> Vendedor <a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> Puede Ver Ventas, Editar Ventas<a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> <a href="#"><i class="fa  fa-trash-o"></i>Eliminar</a> </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td>
                                            <td> Vendedor <a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> Puede Ver Ventas, Editar Ventas<a href="#"><i class="fa  fa-edit"></i>Editar</a></td>
                                            <td> <a href="#"><i class="fa  fa-trash-o"></i>Eliminar</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
        </div>
@endsection