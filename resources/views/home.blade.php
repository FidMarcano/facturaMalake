@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if($n==1)
                        Inicio
                    @elseif($n==2)
                        Registrar ingreso: Confirmar cliente
                    @elseif($n==3)
                        Registrar ingreso: Ingresar datos
                    @endif

                </div>

                <div class="panel-body">
                    
                    @if($n==1)
                        @include('homeViews.inicio')
                    @elseif($n==2)
                        @include('formularios.cedulaCliente')
                    @elseif($n==3)
                        @include('formularios.registroIngreso') 
                    @elseif($n==4)
                        @include('homeViews.ingresoRegistrado')   
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
