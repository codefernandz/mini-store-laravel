<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Whitelist de columnas asignables masivamente (mass assignment).
     *
     * Sin esto, Product::create([...]) lanzaría MassAssignmentException.
     * Es una medida de seguridad para evitar que un usuario malicioso
     * inyecte columnas sensibles (ej. 'is_admin') desde un formulario.
     *
     * NO incluimos 'id' ni los timestamps: Eloquent los gestiona solo.
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
    ];
}
