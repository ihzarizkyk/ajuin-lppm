<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'legal',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'pengelola',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'pengusul',
            'guard_name' => 'web'
        ]);
        Role::create([
            'name' => 'pimpinan',
            'guard_name' => 'web'
        ]);
    }
}
