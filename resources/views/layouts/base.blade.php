<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Grupo Minuano - Intranet :: Página Inicial </title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    @yield('css')
    <!-- animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}?{{ time() }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('css/colors/megna-dark.css') }}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
.right-side-toggle i{
    animation-name: unset;
    position: static;
}

#side-menu li.devider {
    margin: 0px;
}
</style>
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{ url('inicio') }}">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="{{ asset('plugins/images/admin-logo-dark.png') }}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ asset('plugins/images/admin-logo-dark.png') }}" alt="home" class="light-logo" />
                        </span> </a>
                    </div>
                    <!-- /Logo -->
                    <!-- Search input and Toggle icon -->
                    <ul class="nav navbar-top-links navbar-left">
                        <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <ul class="dropdown-menu mailbox animated fadeIn">
                                <li>
                                    <div class="drop-title text-center">Você tem 3 novos recados</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <a href="#">
                                            <div class="user-img"> <img src="{{ asset('plugins/images/users/pawandeep.jpg') }}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Carlos Eduardo</h5> <span class="mail-desc">Passe no RH, preciso falar com você.</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img"> <img src="{{ asset('plugins/images/users/6.jpg') }}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Flavia Lopes</h5> <span class="mail-desc">Crachá está pronto, pode buscar.</span> <span class="time">9:10 AM</span> </div>
                                                </a>
                                                <a href="#">
                                                    <div class="user-img"> <img src="{{ asset('plugins/images/users/3.jpg') }}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                    <div class="mail-contnet">
                                                        <h5>Paula C. Hermes</h5> <span class="mail-desc">Reunião confirmada</span> <span class="time">9:08 AM</span> </div>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a class="text-center" href="javascript:void(0);"> <strong>Ver todos os recados</strong> <i class="fa fa-angle-right"></i> </a>
                                            </li>
                                        </ul>
                                        <!-- /.dropdown-messages -->
                                    </li>
                                    <!-- .Task dropdown -->
                                    <li class="dropdown">
                                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-bell"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-tasks animated fadeIn">
                                            <li>
                                                <a href="#">
                                                    <div>
                                                        <p> <strong>Tem um novo evento em sua agenda</strong></p>
                                                        <p class="text-muted">Reunião Geral - 17:30</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <div>
                                                        <p> <strong>Há uma publicação de RH não lida</strong></p>
                                                        <p class="text-muted">Aviso geral, não esqueçam seus cra...</p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">
                                                    <div>
                                                        <p> <strong>Vote agora na enquete</strong></p>
                                                        <p class="text-muted">Qual sua refeição preferida no re...</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-top-links navbar-right pull-right">
                                    <li>
                                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                                            <input type="text" placeholder="Procurar..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{ asset('plugins/images/users/6.jpg') }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Raquel </b><span class="caret"></span> </a>
                                            <ul class="dropdown-menu dropdown-user animated flipInY">
                                                <li>
                                                    <div class="dw-user-box">
                                                        <div class="u-img"><img src="{{ asset('plugins/images/users/6.jpg') }}" alt="user" /></div>
                                                        <div class="u-text">
                                                            <h4>Raquel Viegas</h4>
                                                            <p class="text-muted">Almoxarifado</p></div>
                                                        </div>
                                                    </li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#"><i class="ti-user"></i> Meu Perfil</a></li>
                                                    <li><a href="#"><i class="ti-layout-media-overlay"></i> Meus Posts</a></li>
                                                    <li><a href="{{ url('recados') }}"><i class="ti-email"></i> Meus Recados</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#"><i class="ti-settings"></i> Configurações de Conta</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="#"><i class="fa fa-power-off"></i> Sair</a></li>
                                                </ul>
                                                <!-- /.dropdown-user -->
                                            </li>
                                            <!-- /.dropdown -->
                                        </ul>
                                    </div>
                                    <!-- /.navbar-header -->
                                    <!-- /.navbar-top-links -->
                                    <!-- /.navbar-static-side -->
                                </nav>
                                <!-- End Top Navigation -->
                                <!-- ============================================================== -->
                                <!-- Left Sidebar - style you can find in sidebar.scss  -->
                                <!-- ============================================================== -->
                                <div class="navbar-default sidebar" role="navigation">
                                    <div class="sidebar-nav slimscrollsidebar">
                                        <div class="sidebar-head">
                                            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                                            <ul class="nav" id="side-menu">
                                                <li class="user-pro">
                                                    <a href="#" class="waves-effect"><img src="{{ asset('plugins/images/users/6.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> Raquel Viegas<span class="fa arrow"></span></span>
                                                    </a>
                                                    <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                                        <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">Meu Perfil</span></a></li>
                                                        <li><a href="javascript:void(0)"><i class="ti-layout-media-overlay"></i> <span class="hide-menu">Meus Posts</span></a></li>
                                                        <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Meus Recados</span></a></li>
                                                        <li><a class="right-side-toggle" href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Configurações</span></a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Sair</span></a></li>
                                                    </ul>
                                                </li>
                                                <li class="devider"></li>
                                                <li> <a href="#" class="waves-effect"><i class="mdi mdi-email-outline fa-fw" data-icon="v"></i> <span class="hide-menu"> Recados <span class="fa arrow"></span> </span></a>
                                                    <ul class="nav nav-second-level">
                                                        <li> <a href="{{ url('recados') }}"><i class="mdi mdi-email-open fa-fw"></i><span class="hide-menu">Meus Recados</span></a> </li>
                                                        <li> <a href="{{ url('recado/novo')}}"><i class="mdi mdi-pencil fa-fw"></i><span class="hide-menu">Escrever Recado</span></a> </li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ url('contatos') }}" class="waves-effect"><i class="fa fa-users fa-fw"></i> <span class="hide-menu">Contatos</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- End Left Sidebar -->
                                    <!-- ============================================================== -->
                                    <!-- ============================================================== -->
                                    <!-- Page Content -->
                                    <!-- ============================================================== -->
                                    @yield('conteudo')
                                    <!-- ============================================================== -->
                                    <!-- End Right sidebar -->
                                    <!-- ============================================================== -->
                                    <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Configurações <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>Barra Brancas</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li><b>Barra Escura</b></li>
                            <br/>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                                </div>
                                <!-- /.container-fluid -->
                                <footer class="footer text-center"> 2018 &copy; Desenvolvido por Youniverse Web </footer>
                            </div>
                            <!-- /#page-wrapper -->
                        </div>
                        <!-- /#wrapper -->
                        <!-- jQuery -->
                        <script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
                        <!-- Bootstrap Core JavaScript -->
                        <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
                        <!-- Menu Plugin JavaScript -->
                        <script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
                        <!--Counter js -->
                        <script src="{{ asset('plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
                        <!--slimscroll JavaScript -->
                        <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
                        <!--Wave Effects -->
                        <script src="{{ asset('js/waves.js') }}"></script>
                        <!-- Vector map JavaScript -->
                        <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-in-mill.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
                        <!-- chartist chart -->
                        <script src="{{ asset('plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
                        <!-- sparkline chart JavaScript -->
                        <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
                        <script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
                        <!-- Custom Theme JavaScript -->
                        <script src="{{ asset('js/custom.js') }}?{{ time() }}"></script>
                        <script src="{{ asset('js/dashboard3.js') }}"></script>
                        <!--Style Switcher -->
                        <script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
                        @yield('script')
                    </body>

                    </html>
