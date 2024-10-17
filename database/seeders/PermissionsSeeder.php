<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Ver-Article',
            'Crear-Article',
            'Editar-Article',
            'Eliminar-Article',
            //table category
            'Ver-categoria',
            'Crear-categoria',
            'Editar-categoria',
            'Eliminar-categoria',
            //table Incomedetail
            'Ver-ingresoDetalle',
            'Crear-ingresoDetalle',
            'Editar-ingresoDetalle',
            'Eliminar-ingresoDetalle',
            
        ];
    }
}
