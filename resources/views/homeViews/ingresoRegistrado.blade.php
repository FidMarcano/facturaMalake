<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingreso registrado</div>
                <div class="panel-body">
                    <h3>La transacción ha sido registrada.</h3>
                    <table class="table">
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
                    <form action="{{ url('/factura') }}" method="get">
                        <input type="text" name="cliente" hidden="true" value="{{ $cliente->id }}">
                        <input type="text" name="ingreso" hidden="true" value="{{ $ingreso->id }}"> 
                       
                        <button type="submit" class="btn btn-primary">
                            Descargar factura PDF
                        </button>
                    </form>
                    
                    <h5>Para volver al inicio, hacer click <a href="{{ url('/home') }}">aquí.</a></h5>
                </div>
            </div>
        </div>
    </div>
</div>