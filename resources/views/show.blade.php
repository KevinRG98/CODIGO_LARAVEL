@extends ('layout')
@section('title', 'Servicio | $servicio->titulo) 1
@section('content')
<tr>
<td colspan="4">{{ $servicio->titulo }}</td>
</tr>
<tr>
<td colspan="4">{{ $servicio->descripcion }}</td>
</tr>
<tr>
<td colspan="4">{{ $servicio->created_at->diffForHumans() }}</td>
</tr>
@endsection