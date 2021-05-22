<x-plantilla>
    <x-slot name="titulo">Editar profesor</x-slot>
    <x-slot name="cabecera">Modificar profesor</x-slot>
    {{-- Componente de errores --}}
    <x-errores />
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('profesores.update', $profesore) }}" class=" p-4 bg-secondary text-light">
    {{-- Muestra de datos --}}
    @csrf
    @method('PUT')
    @bind($profesore)
    <x-form-input name="nombre" label="Nombre profesor" />
    <x-form-input name="apellidos" label="Apellidos profesor" />
    <x-form-input name="email" label="Mail" type="mail" />
    <x-form-input name="localidad" label="Localidad" />
    {{-- Botonera (enviar, restaurar, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Actualizar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Restaurar</button>
        {{-- ONCLICK contiene una función de JS que permite cargar la anterior URL almacenada en el historial --}}
        <a href="{{route('profesores.index')}}" class="btn btn-secondary"><i class="fas fa-undo"></i> Volver</a>
    </div>
</form>
</x-plantilla>
