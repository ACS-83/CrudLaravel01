<x-plantilla>
    <x-slot name="titulo">Crear profesor</x-slot>
    <x-slot name="cabecera">Nuevo profesor</x-slot>
    {{-- Componente de errores --}}
    <x-errores></x-errores>
    {{-- Inicio formulario --}}
    <form name="sd" method="POST" action="{{ route('profesores.store') }}" class=" p-4 bg-secondary text-light">
    {{-- Recogida de datos --}}
    @csrf
    <x-form-input name="nombre" label="Nombre profesor" />
    <x-form-input name="apellidos" label="Apellidos profesor" />
    <x-form-input name="email" label="Mail" type="mail" />
    <x-form-input name="localidad" label="Localidad" />
    {{-- Botonera (enviar, restaurar, volver) --}}
    <div class="mt-3">
        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Enviar</button>
        <button type="reset" class=" ml-3 btn btn-info"><i class="fas fa-eraser"></i> Limpiar</button>
        {{-- ONCLICK contiene una función de JS que permite cargar la anterior URL almacenada en el historial --}}
        <button class="ml-3 btn btn-primary" onclick="window.history.back();"><i class="fas fa-undo-alt"></i>
            Volver</button>
    </div>
</form>
</x-plantilla>
