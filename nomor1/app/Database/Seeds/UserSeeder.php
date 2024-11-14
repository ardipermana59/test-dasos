<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('users')->insert(
            [
                'username' => 'admin',
                'password' => password_hash('password', PASSWORD_DEFAULT),
            ]
        );
    }
}
