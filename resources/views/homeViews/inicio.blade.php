                        <table class="table">
                            <tr>
                                <th>Instrucciones</th>
                                <th>Opciones</th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Seleccionar para poder registrar nuevos pagos por servicios ofrecidos.</p><br>
                                </td>
                                <td>
                                    <form method="POST" class="form-horizontal" action="{{ url('/seleccion') }}">
                                        {{ csrf_field() }}
                                        <button name="registrar"  class="btn btn-primary col-md-12" id="registrar" type="submit">
                                            Registrar ingreso
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Descargar reportes PDF con los balances del día, semana, o año seleccionados.</p><br>
                                </td>
                                <td>
                                    <form action="{{ url('/reportes') }}" method="get" class="form-horizontal">
                                        {{ csrf_field() }}    
                                        <button name="reportes" class="btn btn-primary col-md-12" id="descargar" type="submit">
                                            Descargar reporte
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @if(Auth::user()->nivel == 2)
                                <tr>
                                    <td>
                                        <p><b>Solo para administradores</b><br>Borrar y editar registros hechos por durante durante la manipulación del sistema</p>
                                    </td>
                                    <td>
                                        <button name="registros"  class="btn btn-primary col-md-12" id="registros" type="submit">
                                            Administrar registros
                                        </button>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td>
                                        <p><b>Solo para administradores</b><br>Agregar y editar usuarios</p>
                                    </td>
                                    <td>
                                        <button name="usuarios"  class="btn btn-primary col-md-12" id="usuarios" type="submit">
                                            Administrar usuarios
                                        </button>
                                    </td>
                                </tr>
                                
                            @endif
                        </table>
   