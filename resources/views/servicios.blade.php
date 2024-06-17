@extends('layout')

@section('title', 'Servicios')

@section('content')
    <h2>Servicios</h2>
    
    @if($servicios->count())
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>
                            <a href="{{ route('servicios.show', $servicio) }}">
                                {{ $servicio->titulo }}
                            </a>
                        </td>
                        <td>{{ $servicio->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $servicios->links() }}
        </div>
    @else
        <p>No hay servicios disponibles</p>
    @endif

@endsection