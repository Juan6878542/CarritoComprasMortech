<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <form action="{{ route('role.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nombre del Rol</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}" required>
            </div>
            <div class="form-group mb-3">
                <label for="permissions" class="form-label">Permisos del Rol</label>
                <table class="table table-bordered">
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
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ url('dashboard/role') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
