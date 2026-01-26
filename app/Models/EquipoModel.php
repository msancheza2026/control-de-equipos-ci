<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipoModel extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'codigo_interno',
        'nombre',
        'tipo_id',
        'area_id',        
        'estado',
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
