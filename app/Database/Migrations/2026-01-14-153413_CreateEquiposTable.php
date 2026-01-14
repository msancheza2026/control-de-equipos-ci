<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEquiposTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'codigo_interno' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => 150,
            ],
            'tipo_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'area_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'estado' => [
                'type'       => 'VARCHAR',
                'constraint' => 30,
                'default'    => 'activo',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addKey('codigo_interno', false, true); // unique
        $this->forge->addKey('tipo_id');
        $this->forge->addKey('area_id');

        $this->forge->createTable('equipos', true);
    }

    public function down()
    {
        $this->forge->dropTable('equipos', true);
    }
}
