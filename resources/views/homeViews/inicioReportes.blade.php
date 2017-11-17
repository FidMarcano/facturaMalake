<div class="col-md-10 col-md-offset-1">
	
	<form class="form-horizontal" name="reporteFormSelect"  method="GET" action="{{ url('/reportes/create') }}">
		<div class="col-md-10">
			<select class="form-control" name="opcion">
				<option value="0">
					Seleccionar tipo de reporte
				</option>
				<option value="1">
					Anual
				</option>
				<option value="2">
					Mensual
				</option>
				<option value="3">
					Semanal
				</option>
				<option value="4">
					Hoy
				</option>
				<option value="5">
					Personalizado
				</option>
			</select>
		</div>
		<div class="col-md-2">
			<button type="submit" class="btn btn-primary">
				Buscar
			</button>
		</div>
	</form>
</div>

<div class="col-md-10 col-md-offset-1">

	@if($n1 == 0)
	@elseif( $n1 == 1)
		@include('vistaReportes.reporteAnos')
	@elseif( $n1 == 2)
		@include('vistaReportes.reporteMeses')
	@elseif( $n1 == 3)
		@include('vistaReportes.reporteSemana')
	@elseif( $n1 == 4)
		@include('vistaReportes.reporteDia')
	@elseif( $n1 == 5)
		@include('formularios.fechasReporte')
	@endif

	@if($n2 == 0)
	@elseif($n2 == 1)
		@include('vistaReportes.resultadoFechas')
	@endif

</div>
