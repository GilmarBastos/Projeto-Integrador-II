<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->truncate();

        $this->db->table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => '$2y$10$cuzYSqbpVk7ckPo9NCRKFOHae/THatIZP6TXBc35dJ8deyFzA8XDW',
            'created_at' => '2023-12-03 21:00:00', // admin type
        ]);

        //Senha de teste : Teste@123
    }
}