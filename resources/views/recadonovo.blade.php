@extends('layouts.base')
@section('css')
 <link rel="stylesheet" href="{{ asset('plugins/bower_components/html5-editor/bootstrap-wysihtml5.css') }}" />
    <!-- Dropzone css -->
    <link href="{{ asset('plugins/bower_components/dropzone-master/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('conteudo')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Novo Recado</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <ol class="breadcrumb">
                            <li><a href="#">Página Inícial</a></li>
                            <li><a href="#">Recados</a></li>
                            <li class="active">Novo Recado</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="row">
                                 <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                                <div> <a href="{{ url('recado/novo') }}" class="btn btn-custom btn-block waves-effect waves-light">Novo Recado</a>
                                    <div class="list-group mail-list m-t-20"> 
                                        <a href="#" class="list-group-item">
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
                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <h3 class="box-title">Escreva o novo recado</h3>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Para:"> </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Assunto:"> </div>
                                    <div class="form-group">
                                        <textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
                                    </div>
                                    <h4><i class="ti-link"></i> Anexo</h4>
                                    <form action="#" class="dropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple /> </div>
                                    </form>
                                    <hr>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Enviar</button>
                                    <button class="btn btn-default"><i class="fa fa-times"></i> Descartar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('script')
 <script src="{{ asset('plugins/bower_components/html5-editor/wysihtml5-0.3.0.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/html5-editor/bootstrap-wysihtml5.js') }}"></script>
    <script src="{{ asset('plugins/bower_components/dropzone-master/dist/dropzone.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.textarea_editor').wysihtml5();
    });
    </script>
   @endsection