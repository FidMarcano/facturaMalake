<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reporte {{ $fecha }}</title>
</head>
	<body>
		<div class="col-md-10 col-md-offset-1">
			<table class="table table-striped">
				<tr>
					<th>Fecha</th>
					<th>Total</th>
					<th>Neto</th>
					<th>IVA</th>
				</tr>
				@foreach($resultados as $r)
					<tr>
						<td>
							{{ $r->fecha }}
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
			</table>
		</div>
	</body>
</html>