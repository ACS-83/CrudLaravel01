<x-plantilla>
    <x-slot name="titulo">Gestión</x-slot>
    <x-slot name="cabecera">Detalles profesor ({{$profesore->id}})</x-slot>
    <div class="card m-auto" style="width: 28rem;">
         <div class="card-title mx-auto">
          <h4 class="card-body">{{$profesore->apellidos}}, {{$profesore->nombre}}</h4>
          <h6 class="card-subtitle mb-2 text-muted"><b>Localidad:</b> ({{$profesore->localidad}})</h6>
          <p class="card-text"><b>Email:</b> {{$profesore->email}}</p>
          <p class="card-text"><b>Asignatura:</b><ul>
              {{-- Recorremos el array. Si lo detecta vacío, indicará que este profesor no tiene asignatura asignada --}}
            @forelse ($profesore->asignaturas as $item)
            <li><a href="{{route('asignaturas.show', $item)}}">{{$item->nombre}}</a></li>
            @empty
            <li>Ninguna asignatura asignada</li>
            @endforelse
          </ul></p>
          <div class="mt-2">
            <a href="{{route('profesores.index')}}" class="btn btn-secondary"><i class="fas fa-undo"></i> Volver</a>
          </div>
        </div>
      </div>
</x-plantilla>
