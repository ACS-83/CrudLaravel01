<x-plantilla>
    <x-slot name="titulo">Gestión</x-slot>
    <x-slot name="cabecera">Detalles asignatura ({{$asignatura->id}})</x-slot>
    <div class="card m-auto" style="width: 28rem;">
         <div class="card-title mx-auto">
          <h4 class="card-body">{{$asignatura->nombre}}</h4>
          <h6 class="card-subtitle mb-2 text-muted"><b>Descripción:</b> {{$asignatura->descripcion}}</h6>
          <p class="card-text"><b>Créditos:</b> {{$asignatura->creditos}}</p>
          <h6 class="card-subtitle mb-2 text-muted"><b>Imparte:</b>
            <a href="{{route('profesores.show', $asignatura->profesor->id)}}">{{$asignatura->profesor->nombre}} {{$asignatura->profesor->apellidos}}</a></h6>
          <div class="mt-2">
            <a href="{{route('asignaturas.index')}}" class="btn btn-secondary"><i class="fas fa-undo"></i> Volver</a>
        </div>
        </div>
      </div>
</x-plantilla>
