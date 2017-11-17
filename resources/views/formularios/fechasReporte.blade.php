<br>
<div class="col-md-7 col-md-offset-2">
	<form class="form-inline" method="POST" action="{{ url('/personalizado') }}" name="reportePersonalizado">
		{{ csrf_field() }}
		<input type="date" name="fecha1" class="form-control" min="{{ $min->fecha }}" max="{{ $max->fecha }}">
		<input type="date" name="fecha2" class="form-control" min="{{ $min->fecha }}" max="{{ $max->fecha }}">
		<button type="submit" class="btn btn-primary" >
			Buscar
		</button>
	</form>
</div>