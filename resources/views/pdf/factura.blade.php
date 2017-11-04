<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Factura {{ $cliente->cedula }}_{{ $ingreso->fecha }}</title>
</head>
	<body>
		<table>
	        <tr>
	            <th>Nombre</th>
	            <td>{{ ucfirst($cliente->nombre) }} {{ ucfirst($cliente->apellido) }}</td>
	        </tr>
	        <tr>
	            <th>Cédula</th>
	            <td>{{ $cliente->cedula }}</td>
	        </tr>
	        <tr>
	            <th>Teléfono</th>
	            <td>{{ $cliente->telefono }}</td>
	        </tr>
	        <tr>
	            <th>Dirección</th>
	            <td>{{ $cliente->direccion }}</td>
	        </tr>
	        <tr>
	            <th>Método de pago</th>
	            @foreach($metodos as $m)
	                @if($ingreso->id_metodo == $m->id)
	                    <td>{{ ucfirst($m->metodo) }}</td>
	                @endif
	            @endforeach
	        </tr>
	        <tr>
	            <th>Concepto</th>
	            @foreach($conceptos as $c)
	                @if($ingreso->id_concepto == $c->id)
	                    <td>{{ ucfirst($c->concepto) }}</td>
	                @endif
	            @endforeach
	        </tr>
	        <tr>
	            <th>Costo básico</th>
	            <td>{{ $ingreso->neto }}</td>
	        </tr>
	        <tr>
	            <th>IVA</th>
	            <td>{{ $ingreso->iva }}</td>
	        </tr>
	        <tr>
	            <th>Costo total</th>
	            <td>{{ $ingreso->costo }}</td>
	        </tr>
	    </table>
	</body>
</html>