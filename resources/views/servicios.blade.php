@extends('layout')

@section('title', 'Servicios')

@section('content')

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Listado de Servicios</h1>
        <a href="{{ route('servicios.create') }}" class="btn btn-primary"><strong>Nuevo Servicio</strong></a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
            </tr>
        </thead>
        <tbody>
            @if($servicios->count())
                @foreach($servicios as $servicio)
                    <tr>
                        <td>
                            <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">No hay servicios que mostrar</td>
                </tr>
            @endif
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $servicios->links('vendor.pagination.bootstrap-4') }}
    </div>
</div>

@endsection







