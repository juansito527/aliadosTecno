<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Red aliados</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/favicon.png")}}">
	<link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
		integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset("assets/css/feathericon.min.css")}}">
	<link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    @yield('css')
</head>
<body>
@yield('cabeceraYnav')
<div class="main-wrapper">
<div class="page-wrapper">
<div class="content container-fluid">
<!-- cabecera -->
<div class="header">
    <!-- icono con titulo -->
    <div class="header-left">
        <a href="index.html" class="logo"> <img
            src="{{asset("assets/img/profiles/avatar.jpg")}}"
                width="50" height="70" alt="logo"> <span class="logoclass">Red-Aliados</span> </a>
        <a href="index.html" class="logo logo-small"> <img
                src="{{asset("assets/img/profiles/avatar.jpg")}}"
                alt="Logo" width="30" height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    
</div>
<!-- fin cabecera -->

<!-- nav izquierdo -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="index.html"><i class="fas fa-tachometer-alt"></i>
                        <span>Inicio</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Empresas </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{route("ModuloEmpresa")}}"> Todas las empresas </a></li>
                        <li><a href="edit-booking.html"> Editar empresas </a></li>
                        <li><a href="add-booking.html"> Agregar empresas </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-lightbulb"></i></i> <span> Postulaciones
                        </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-booking.html"> Todas las postulaciones </a></li>
                        <li><a href="edit-booking.html"> postulaciones Aceptadas </a></li>
                        <li><a href="add-booking.html"> postulaciones Rechazadas </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Usuarios </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-customer.html"> todos los usuarios </a></li>
                        <li><a href="edit-customer.html"> Editar usuario </a></li>
                        <li><a href="add-customer.html"> Agregar usuario</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Aliados </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">Todos los aliados </a></li>
                        <li><a href="edit-room.html"> Editar aliado </a></li>
                        <li><a href="add-room.html"> Agregar aliado </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user-tie"></i><span> empleados </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">Todos los empleados </a></li>
                        <li><a href="edit-staff.html"> editar empleado </a></li>
                        <li><a href="add-staff.html"> Agregar empleado </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- fin nav izquierdo -->

{{-- contenido aqui --}}
@yield('content')
</div>
</div>
</div>






@yield('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="{{asset("assets/plugins/slimscroll/jquery.slimscroll.min.js")}}"></script>
<script src="{{asset("assets/js/script.js")}}"></script>
</body>