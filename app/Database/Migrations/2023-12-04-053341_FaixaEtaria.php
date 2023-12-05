<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FaixaEtaria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'idade' => [
                'type'           => 'INT',
                'constraint'     => 3,
            ],
            'situacao' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'created_at datetime default current_timestamp',

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('etarias');
    }

    public function down()
    {
        $this->forge->dropTable('etarias');
    }
}
