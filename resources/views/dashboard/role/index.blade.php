<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <a href="{{ url('dashboard/role/create') }}" class="btn btn-success mb-3">Nuevo Rol</a>
        
        <table class="table table-dark table-striped">
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
                        <a href="{{ url('dashboard/role/' . $rol->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{ url('dashboard/role/' . $rol->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
