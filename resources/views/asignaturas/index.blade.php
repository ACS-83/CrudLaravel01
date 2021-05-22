<x-plantilla>
    <x-slot name="titulo">Gestión asignaturas</x-slot>
    <x-slot name="cabecera">Gestión de asignaturas</x-slot>
    <x-mensajes />
    <a href="{{route('asignaturas.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Añadir asignatura</a>
    <table class="table table-warning table-striped mt-2">
      {{-- Cabecera para cada columna de la tabla --}}
        <thead>
          <tr>
            <th scope="col">Detalles</th>
            <th scope="col">Nombre asig.</th>
            <th scope="col">Descripción</th>
            <th scope="col">Créditos</th>
            <th scope="col" colspan=2 class="text-center">Acciones</th>
          </tr>
        </thead>
        <tbody>
          {{-- Recorro con un foreach los datos de la tabla asignaturas a la vez que voy rellenando cada fila con los datos --}}
            @foreach($asignaturas as $item)
          <tr>
            {{-- BOTÓN DETALLES --}}
            <th scope="row">
                <a href="{{route('asignaturas.show', $item)}}" class="btn btn-secondary"><i class="fas fa-info"></i> Detalles</a>
            </th>
            {{-- DATOS --}}
            <td>{{$item->nombre}}</td>
            <td>{{$item->descripcion}}</td>
            <td>{{$item->creditos}}</td>
            {{-- BOTÓN EDITAR --}}
            <td class="text-center">
                <a href="{{route('asignaturas.edit', $item)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Editar</a>
            </td>
            <td class="text-center">
              {{-- BOTÓN BORRAR --}}
                <form name="as" method="POST" action="{{route('asignaturas.destroy', $item)}}">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Borrar</button>
                </form>
            </td>
          </tr>
          {{-- FINALIZO RECORRIDO FOREACH --}}
          @endforeach
        </tbody>
      </table>
      {{-- Paginador --}}
      <div class="mt-2">
          {{$asignaturas->links()}}
      </div>
</x-plantilla>
