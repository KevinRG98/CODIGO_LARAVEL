@section('content')
<tr>
<td colspan="4">{{ $servicio->titulo }}
<a href="{{ route('servicios.edit', $servicio) }}">Editar</a>
</td>
<td colspan="2">
<form action="{{ route('servicios.destroy', $servicio) }}" method="POST"> @csrf @method('DELETE') <button>Eliminar</button>
</form>
</td>
</tr>