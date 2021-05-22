<x-plantilla>
    <x-slot name="titulo">Inicio</x-slot>
        <x-slot name="cabecera">Universidad Complutense</x-slot>
            <ul class="navbar-nav">
                <li class="nav-item mx-auto">
                    <a href="{{route('profesores.index')}}" class="btn btn-secondary">Área gestión profesores</a>
                    <a href="{{route('asignaturas.index')}}" class="btn btn-secondary">Área gestión asignaturas</a>
                </li>
            </ul>
</x-plantilla>
