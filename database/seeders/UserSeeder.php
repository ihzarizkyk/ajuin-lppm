<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'pengelolachin',
            'name' => 'Sarwono',
            'nip' => '123456',
            'email' => 'pengelola@gmail.com',
            'no_telp' => '089726232',
            'unit' => 'FTII',
            'jabatan' => 'Pengelola',
            'password' => bcrypt('123'),
            'role' => '1',
        ]);

    }
}
