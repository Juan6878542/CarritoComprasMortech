<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <form action="{{ route('role.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nombre del Rol</label>
            <div>
                <input type="text" name="name" id="name" value="{{ $role->name }}">
            </div>
        </div>
        <div>
            <label for="permissions">Permisos del Rol</label>
        </div>
        <div>
            <table>
                <tbody>
                    @foreach($permission as $id => $permission)
                    <tr>
                        <td>
                            <input type="checkbox" name="permissions[]" value="{{ $id }}" {{ $role->permissions->contains($id) ? 'checked' : '' }}>
                        </td>
                        <td>{{ $permission }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <button class="btn btn-primary">Guardar</button>
            <a href="{{ url('dashboard/role') }}">Cancelar</a>
        </div>
    </form>
</x-app-layout>
