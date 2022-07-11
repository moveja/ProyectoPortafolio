@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Show Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Linea:</strong>
                            {{ $producto->linea }}
                        </div>
                        <div class="form-group">
                            <strong>Costo:</strong>
                            {{ $producto->costo }}
                        </div>
                        <div class="form-group">
                            <strong>Preciou:</strong>
                            {{ $producto->precioU }}
                        </div>
                        <div class="form-group">
                            <strong>Existencia:</strong>
                            {{ $producto->existencia }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            <div class="form-group">
        <label for="imagen"> </label>
        @if(isset($producto->imagen))
        <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$producto->imagen }}" width="100" alt="">
        @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
