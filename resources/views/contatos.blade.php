@extends('layouts.base')
@section('css')
 <!-- Footable CSS -->
    <link href="{{ asset('plugins/bower_components/footable/css/footable.core.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
@endsection
@section('conteudo')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Contatos</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <ol class="breadcrumb">
                            <li><a href="#">Página Inicial</a></li>
                            <li class="active">Contatos</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box p-0">
                            <!-- .left-right-aside-column-->
                            <div class="page-aside">
                                <!-- .left-aside-column-->
                                <div class="left-aside">
                                    <div class="scrollable">
                                        <ul class="list-style-none">
                                            <li class="box-label"><a href="javascript:void(0)">Todos os contatos <span>123</span></a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0)">Almoxarifado <span>103</span></a></li>
                                            <li><a href="javascript:void(0)">Recursos Humanos <span>19</span></a></li>
                                            <li><a href="javascript:void(0)">Tec. da Informação <span>623</span></a></li>
                                            <li><a href="javascript:void(0)">Limpeza <span>53</span></a></li>
                                            <li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">+ Nova Categoria</a></li>
                                            <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" id="myModalLabel">Nova Categoria</h4> </div>
                                                        <div class="modal-body">
                                                            <from class="form-horizontal">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Nome da Categoria</label>
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" placeholder="Digite o nome"> </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Numero de Contatos</label>
                                                                    <div class="col-md-12">
                                                                        <select class="form-control">
                                                                            <option>Todos os contatos</option>
                                                                            <option>10</option>
                                                                            <option>20</option>
                                                                            <option>30</option>
                                                                            <option>40</option>
                                                                            <option>Customizar</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </from>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Salvar</button>
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /.left-aside-column-->
                                <div class="right-aside">
                                    <div class="right-page-header">
                                        <div class="pull-right">
                                            <input type="text" id="demo-input-search2" placeholder="Procurar Contatos" class="form-control">
                                        </div>
                                        <h3>Contatos</h3> </div>
                                    <div class="clearfix"></div>
                                    <div class="scrollable">
                                        <div class="table-responsive">
                                            <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nome</th>
                                                        <th>Email</th>
                                                        <th>Telefone</th>
                                                        <th>Area</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                        </td>
                                                        <td>genelia@gmail.com</td>
                                                        <td>(51) 3466-7128</td>
                                                        <td><span class="label label-danger">Tec. da Informação</span> </td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                        </td>
                                                        <td>arijit@gmail.com</td>
                                                        <td>(51) 3425-0760</td>
                                                        <td><span class="label label-info">Limpeza</span> </td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                        </td>
                                                        <td>govinda@gmail.com</td>
                                                        <td>(51) 3035-1587</td>
                                                        <td><span class="label label-success">Almoxarifado</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/hritik.jpg" alt="user" class="img-circle" /> Hritik Roshan</a>
                                                        </td>
                                                        <td>hritik@gmail.com</td>
                                                        <td>(51) 3659-7412</td>
                                                        <td><span class="label label-inverse">RH</span></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/john.jpg" alt="user" class="img-circle" /> John Abraham</a>
                                                        </td>
                                                        <td>john@gmail.com</td>
                                                        <td>(51) 3428-9962</td>
                                                        <td><span class="label label-danger">Almoxarifado</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle" /> Pawandeep kumar</a>
                                                        </td>
                                                        <td>pawandeep@gmail.com</td>
                                                        <td>(51) 3536-8796</td>
                                                        <td><span class="label label-warning">Gerencia</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle" /> Ritesh Deshmukh</a>
                                                        </td>
                                                        <td>ritesh@gmail.com</td>
                                                        <td>(51) 3466-7128</td>
                                                        <td><span class="label label-danger">Tec. da Informação</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/salman.jpg" alt="user" class="img-circle" /> Salman Khan</a>
                                                        </td>
                                                        <td>salman@gmail.com</td>
                                                        <td>(51) 3425-0760</td>
                                                        <td><span class="label label-info">Limpeza</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                        </td>
                                                        <td>govinda@gmail.com</td>
                                                        <td>(51) 3035-1587</td>
                                                        <td><span class="label label-success">Almoxarifado</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle" /> Sonu Nigam</a>
                                                        </td>
                                                        <td>sonu@gmail.com</td>
                                                        <td>(51) 3659-7412</td>
                                                        <td><span class="label label-inverse">RH</span></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/varun.jpg" alt="user" class="img-circle" /> Varun Dhawan</a>
                                                        </td>
                                                        <td>varun@gmail.com</td>
                                                        <td>(51) 3428-9962</td>
                                                        <td><span class="label label-danger">Almoxarifado</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle" /> Genelia Deshmukh</a>
                                                        </td>
                                                        <td>genelia@gmail.com</td>
                                                        <td>(51) 3466-7128</td>
                                                        <td><span class="label label-danger">Tec. da Informação</span> </td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>13</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle" /> Arijit Singh</a>
                                                        </td>
                                                        <td>arijit@gmail.com</td>
                                                        <td>(51) 3425-0760</td>
                                                        <td><span class="label label-info">Limpeza</span> </td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14</td>
                                                        <td>
                                                            <a href="#"><img src="../plugins/images/users/govinda.jpg" alt="user" class="img-circle" /> Govinda jalan</a>
                                                        </td>
                                                        <td>govinda@gmail.com</td>
                                                        <td>(51) 3035-1587</td>
                                                        <td><span class="label label-success">Almoxarifado</span></td>
                                                        
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="2">
                                                            <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Adicionar Novo Contato</button>
                                                        </td>
                                                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Adicionar Novo Contato</h4> </div>
                                                                    <div class="modal-body">
                                                                        <from class="form-horizontal form-material">
                                                                            <div class="form-group">
                                                                                <div class="col-md-12 m-b-20">
                                                                                    <input type="text" class="form-control" placeholder="Nome"> </div>
                                                                                <div class="col-md-12 m-b-20">
                                                                                    <input type="text" class="form-control" placeholder="E mail"> </div>
                                                                                <div class="col-md-12 m-b-20">
                                                                                    <input type="text" class="form-control" placeholder="Telefone"> </div>
                                                                                <div class="col-md-12 m-b-20">
                                                                                    <input type="text" class="form-control" placeholder="Area"> </div>
                                                                                <div class="col-md-12 m-b-20">
                                                                                    <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Foto</span>
                                                                                        <input type="file" class="upload"> </div>
                                                                                </div>
                                                                            </div>
                                                                        </from>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Salvar</button>
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <td colspan="7">
                                                            <div class="text-right">
                                                                <ul class="pagination"> </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- .left-aside-column-->
                            </div>
                            <!-- /.left-right-aside-column-->
                        </div>
                    </div>
                </div>
@endsection
@section('script')
    <!-- Footable -->
    <script src="{{ asset('plugins/bower_components/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ asset('js/footable-init.js') }}"></script>
@endsection