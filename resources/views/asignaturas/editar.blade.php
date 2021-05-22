<x-plantilla>
    <x-slot name="titulo">Editar asignatura</x-slot>
    <x-slot name="cabecera">Modificar asignatura</x-slot>
    {{-- Componente de errores --}}
    <x-errores></x-errores>
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('asignaturas.update', $asignatura) }}" class=" p-4 bg-secondary text-light">
    {{-- Muestra de datos --}}
    @csrf
    @method('PUT')
    @bind($asignatura)
    <x-form-input name="nombre" label="Nombre asignatura" />
    <x-form-input name="descripcion" label="Descripción asignatura" />
    <x-form-input name="creditos" label="Créditos" />
    <x-form-select name="profesor_id" :options="$misProfesores" label="Profesor (selecciona)" />
    {{-- Botonera (enviar, restaurar, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Actualizar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Restaurar</button>
        {{-- ONCLICK contiene una función de JS que permite cargar la anterior URL almacenada en el historial --}}
        <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-undo-alt"></i> Volver</button>
    </div>
</form>
</x-plantilla>
