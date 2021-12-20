@extends('layouts.admin');
@section('cabeceraYnav')
@endsection
@section('content')
		
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12 mt-5">
							<h3 class="page-title mt-3">¡Buen día nombre {{ $UsuarioLogeado['name'] }}</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">236</h3>
										<h6 class="text-muted">Empresas</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">236</h3>
										<h6 class="text-muted">Usuarios</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">236</h3>
										<h6 class="text-muted">Nuevas Postulaciones</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 col-12">
						<div class="card board1 fill">
							<div class="card-body">
								<div class="dash-widget-header">
									<div>
										<h3 class="card_widget_header">236</h3>
										<h6 class="text-muted">Aliados</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<div class="card card-chart">
							<div class="card-header">
								<h4 class="card-title">Visitas</h4>
							</div>
							<div class="card-body">
								<div id="line-chart"></div>
							</div>
						</div>
					</div>
				</div>
			
		@endsection
		@section('js')	
		@endsection