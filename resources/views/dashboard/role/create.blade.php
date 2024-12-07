<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <form action="{{ route('role.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nombre del Rol:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group mb-3">
                <label for="permissions" class="form-label">Permisos del Rol:</label>
                <table class="table table-bordered">
                    <tbody>
                        @foreach ($permissions as $id => $permissions)
                        <tr>
                            <td>
                                <input type="checkbox" name="permission[]" value="{{ $id }}">
                                {{ $permissions }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ url('dashboard/role') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>
</x-app-layout>
