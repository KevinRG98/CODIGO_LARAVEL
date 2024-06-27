@extends ('layout')


@section('title', 'Crear Servicio')

@section('content')
    <table cellpadding="3" cellspacing="5">
    <tr>
    <th colspan="4">Crear nuevo servicio</th>
    </tr>
    @include('partials.validation-errors')
    <form action="{{ route('servicios.store') }}" method="post">
    @include('partials.form',['btnText' => 'Guardar'])
    </form>
    </table>
@endsection