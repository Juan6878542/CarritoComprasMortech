<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Last_Name',
        'Document_Type',
        'Document_Number',
        'Adress',
        'Phone',
        'Email',
        // Agrega otros campos si los tienes
    ];
}
