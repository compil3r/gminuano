@extends('layouts.base')
@section('conteudo')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Meus Recados</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Página Inícial</a></li>
                        <li class="active">Meus Recados</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- row -->
            <div class="row">
                <!-- Left sidebar -->
                <div class="col-md-12">
                    <div class="white-box">
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                                <div> <a href="{{ url('recado/novo') }}" class="btn btn-custom btn-block waves-effect waves-light">Novo Recado</a>
                                    <div class="list-group mail-list m-t-20"> 
                                        <a href="#" class="list-group-item active">
                                            Todos <span class="label label-rouded label-success pull-right">4</span>
                                        </a> 
                                        <a href="#" class="list-group-item ">
                                            Almoxarifado
                                        </a> 
                                        <a href="#" class="list-group-item"> 
                                            Enviados <span class="label label-rouded label-warning pull-right">1</span>
                                        </a> 
                                       
                                    <a href="#" class="list-group-item">
                                        Lixo <span class="label label-rouded label-default pull-right">55</span>
                                    </a> 
                                </div>
                                        <h3 class="panel-title m-t-40 m-b-0">Marcadores</h3>
                                        <hr class="m-t-5">
                                        <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Urgentes</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Divulgação</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Recursos Humanos</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Almoxarifado</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Assembléias</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                                    <div class="inbox-center">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th width="30">
                                                        <div class="checkbox m-t-0 m-b-0 ">
                                                            <input id="checkbox0" type="checkbox" class="checkbox-toggle" value="check all">
                                                            <label></label>
                                                        </div>
                                                    </th>
                                                    <th colspan="4">
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light m-r-5" data-toggle="dropdown" aria-expanded="false"> Filtrar <b class="caret"></b> </button>
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#fakelink">Lidos</a></li>
                                                                <li><a href="#fakelink">Não Lidos</a></li>
                                                                <li><a href="#fakelink">Urgentes</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#fakelink">Todos</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-refresh"></i> </button>
                                                        </div>
                                                    </th>
                                                    <th class="hidden-xs" width="100">
                                                        <div class="btn-group pull-right">
                                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                                        </div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="unread">
                                                    <td>
                                                        <div class="checkbox m-t-0 m-b-0">
                                                            <input type="checkbox">
                                                            <label></label>
                                                        </div>
                                                    </td>
                                                    <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                    <td class="hidden-xs">Flavia Lopes</td>
                                                    <td class="max-texts"> <a href="{{ url('recado/ler') }}" /><span class="label label-info m-r-10">Urgentes</span>Gostariamos de informar que a segunda via do seu crachá já está pronto...</td>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right"> 07:23 PM </td>
                                            </tr>
                                            <tr class="unread">
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Paula Witterbon</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}">O incentivo ao avanço tecnológico, assim como a crescente influência...</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  13 de Maio </td>
                                            </tr>
                                            <tr class="unread">
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Olivia Pope</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-success">Assembléias</span> Todas estas questões, devidamente ponderadas, levantam dúvidas sobre...</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  12 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Vitor Hugo</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-warning">Divulgação</span> Gostaria de enfatizar que a determinação clara de objetivos agrega valor...</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  12 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">José Silva</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-info m-r-10">Urgentes</span>  Caros amigos, a adoção de políticas descentralizadoras talvez venha a ressaltar...</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  12 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Paula Witterbon</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  11 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Olivia Pope</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-success">Assembléias</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  11 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Vitor Hugo</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-warning">Divulgação</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  11 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">José Silva</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-info m-r-10">Urgentes</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  10 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Paula Witterbon</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  10 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Olivia Pope</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-success">Assembléias</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  10 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Vitor Hugo</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-warning">Divulgação</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  09 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">José Silva</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-info m-r-10">Urgentes</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  09 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star text-warning"></i></td>
                                                <td class="hidden-xs">Paula Witterbon</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}">Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  09 de Maio </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox m-t-0 m-b-0">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td class="hidden-xs"><i class="fa fa-star-o"></i></td>
                                                <td class="hidden-xs">Olivia Pope</td>
                                                <td class="max-texts"><a href="{{ url('recado/ler') }}"><span class="label label-success">Assembléias</span> Lorem ipsum perspiciatis unde omnis iste natus error sit voluptatem</a></td>
                                                <td class="hidden-xs"><i class="fa fa-paperclip"></i></td>
                                                <td class="text-right">  09 de Maio </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 m-t-20"> Mostrando 1 - 15 de 200 </div>
                                    <div class="col-xs-5 m-t-20">
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                            <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            
            @endsection