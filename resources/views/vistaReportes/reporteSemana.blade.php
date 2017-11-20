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
				<form action="{{ url('/reporte_semanal') }}" method="get">
						{{ csrf_field() }}
                    <button type="submit" class="btn btn-primary" name="reporteSemanal">
                        Descargar reporte de la semana
                    </button>
            	</form>
			</td>
		</tr>
	</table>

</div>