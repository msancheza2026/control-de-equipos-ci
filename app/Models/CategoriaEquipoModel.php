<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaEquipoModel extends Model
{
    protected $table = 'categorias_equipo';
    protected $primaryKey = 'id';

    // Campos que sí se pueden guardar desde formularios
    protected $allowedFields = ['nombre', 'descripcion', 'activo'];

    // Para created_at y updated_at
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
