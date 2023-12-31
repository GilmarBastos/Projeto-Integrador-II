<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Inicial extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
