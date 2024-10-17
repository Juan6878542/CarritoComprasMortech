<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'provider_id',
        'user_id',
        'receipt_type',
        'receipt_series',
        'receipt_number',
        'date',
        'tax',
        'total',
        'status',
    ];

    // Definir las relaciones con los modelos People y User
    public function provider()
    {
        return $this->belongsTo(People::class, 'provider_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
