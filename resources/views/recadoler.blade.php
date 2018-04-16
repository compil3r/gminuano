@extends('layouts.base')
@section('conteudo')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Recado de Raquel</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        <a href="javascript: void(0);" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Buy Admin Now</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Página Inicial</a></li>
                            <li><a href="#">Recados</a></li>
                            <li class="active">Recado de Raquel</li>
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
                                    <div class="media m-b-30 p-t-20">
                                        <h4 class="font-bold m-t-0">Crachá está pronto, pode buscar.</h4>
                                        <hr>
                                        <a class="pull-left" href="#"> <img class="media-object thumb-sm img-circle" src="{{ asset('plugins/images/users/6.jpg') }}" alt=""> </a>
                                        <div class="media-body"> <span class="media-meta pull-right">07:23 AM</span>
                                            <h4 class="text-danger m-0">Flavia Lopes</h4> <small class="text-muted">From: flavia@gminuano.com</small> </div>
                                    </div>
                                    <p>Olá, Raquel.</p><br>

                                    <p>Gostariamos de informar que a segunda via do seu crachá já está pronto. </p>
                                    <p>Conforme já haviamos informado, você deve levar uma copia da requisição. Caso você tenha perdido, segue em anexo uma nova versão.</p>
                                    <br>
                                    <p>Atenciosamente,</p>
                                    <p>Flavia Lopes</p>
                                    <p><strong>Setor de Crachás</strong></p>
                                    <hr>
                                    <h4> <i class="fa fa-paperclip m-r-10 m-b-10"></i> Anexos <span>(1)</span> </h4>
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-4">
                                            <a href="#"> <img class="img-thumbnail img-responsive" alt="attachment" src="{{ asset('plugins/images/requisicao.bmp') }}"> </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="b-all p-20">
                                        <p class="p-b-20">Clique aqui para <a href="#">responder</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endsection