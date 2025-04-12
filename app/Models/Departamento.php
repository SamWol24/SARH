<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion', 'numero_telefono'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}