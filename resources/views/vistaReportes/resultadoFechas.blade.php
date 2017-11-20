<div class="col-md-10 col-md-offset-1">
	
	<table class="table table-striped">
		<tr>
			<th>Fecha</th>
			<th>Total</th>
			<th>Neto</th>
			<th>IVA</th>
			<th>Opciones</th>
		</tr>

		@foreach($resultados as $r)
			<tr>
				<td>
					{{ $r->dia }}-{{ $r->mes }}-{{ $r->ano }}
				</td>
				<td>
					{{ $r->costo }}
				</td>
				<td>
					{{ $r->neto }}
				</td>
				<td>
					{{ $r->iva }}
				</td>
			</tr>
		@endforeach

		<tr>
			<td>
				<form action="{{ url('/reporte_personalizado') }}" method="get">
					{{ csrf_field() }}
					<input type="date" value="{{ $fecha1 }}" name="fecha1" hidden="true">
					<input type="date" value="{{ $fecha2 }}" name="fecha2" hidden="true">
				    <button type="submit" class="btn btn-primary" name="reporteSemanal">
				        Descargar reporte personalizado
				    </button>
				</form>
			</td>
		</tr>
	</table>

</div>