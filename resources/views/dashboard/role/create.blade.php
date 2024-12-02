<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <form action="{{ route('role.store') }}" method="post">
        @csrf
        <div>
            <label for="name">Nombre del Rol:</label>
            <div>
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div>
            <label for="permissions">Permisos Del Rol:</label>
        </div>
        <table>
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
        <button type class="btn btn-primary">Guardar</button>
        <a href="{{ url('role') }}btn btn-secondary">Cancelar</a>
    </form>
</x-app-layout>
