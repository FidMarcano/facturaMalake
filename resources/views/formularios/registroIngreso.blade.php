<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Datos del nuevo ingreso</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registrar') }}">
                        {{ csrf_field() }}

                       
                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                           
                            <div class="col-md-6">
                                
                                <div>
                                    <p>
                                        <h4><b>Cédula del cliente</b> {{ $cedula }}</h4>
                                    </p>
                                </div>
                                
                                <input id="cedula" value="{{ $cedula }}" type="text" name="cedula" value="{{ old('cedula') }}" required hidden="true">
                          
                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre del cliente</label>

                            <div class="col-md-6">
                                
                                @if($o == 0)
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                                @else
                                    <input id="nombre" value="{{ $cliente->nombre }}" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus disabled="true">
                                @endif

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="apellido" class="col-md-4 control-label">Apellido del cliente</label>

                            <div class="col-md-6">
                                @if($o == 0)
                                    <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus>
                                @else
                                    <input id="apellido" value="{{ $cliente->apellido }}" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required autofocus disabled="true">
                                @endif

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">

                                @if($o == 0)
                                    <input id="telefono" type="number" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>
                                @else
                                    <input id="telefono" type="number" value="{{ $cliente->telefono }}" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus disabled="true">
                                @endif

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                @if($o == 0)
                                <textarea class="form-control" name="direccion"></textarea>
                                @else
                                <textarea class="form-control" disabled="true" name="direccion">{{ $cliente->direccion }}</textarea>
                                @endif
                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                            <label for="costo" class="col-md-4 control-label">Costo del servicio</label>

                            <div class="col-md-6">
                                <input id="costo" type="number" class="form-control" name="costo" value="{{ old('costo') }}" required autofocus>

                                @if ($errors->has('costo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('costo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('metodo') ? ' has-error' : '' }}">
                            <label for="metodo" class="col-md-4 control-label">Método de pago</label>

                            <div class="col-md-6">
                                <select name="metodo" id="metodo" class="form-control">
                                    <option value="0">Seleccione un método de pago</option>
                                    @foreach($metodos as $m)
                                        <option value="{{ $m->id }}">{{ ucfirst($m->metodo) }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('metodo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('metodo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                            <label for="usuario" class="col-md-4 control-label">Trabajador</label>

                            <div class="col-md-6">
                                <select name="usuario" id="usuario" class="form-control">
                                    <option value="0">Seleccione al trabajador</option>
                                    @foreach($usuarios as $u)
                                        <option value="{{ $u->id }}">{{ ucfirst($u->nombre) }} {{ ucfirst($u->apellido) }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('concepto') ? ' has-error' : '' }}">
                            <label for="concepto" class="col-md-4 control-label">Concepto</label>

                            <div class="col-md-6">
                                <select name="concepto" id="concepto" class="form-control">
                                    <option value="0">Seleccione al trabajador</option>
                                    @foreach($conceptos as $c)
                                        <option value="{{ $c->id }}">{{ ucfirst($c->concepto) }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('concepto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('concepto') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="text" hidden="true" value="{{ $o }}" name="o">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>