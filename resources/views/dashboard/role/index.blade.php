<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div>
        <a href="{{url('dashboard/role/create')}}">Nuevo Rol</a>
    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Rol</th>
                <th>Permisos</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $rol)
            <tr>
                <td>{{ $rol->name }}</td>
                <td>
                    @forelse($rol->permissions as $permission)
                    <span class="badge badge-primary">{{ $permission->name }}</span>
                    @empty
                    <span>No tiene permisos asignados.</span>
                    @endforelse
                </td>
                <td>
                    <a href="{{ url('dashboard/role/' . $rol->id . '/edit') }}">Editar</a>
                </td>
                <td>
                    <form action="{{ url('dashboard/role/' . $rol->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
