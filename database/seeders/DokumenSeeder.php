<?php

namespace Database\Seeders;

use App\Models\Dokumen;
use Illuminate\Database\Seeder;

class DokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'nama'=>'MOU',
            ],
            [
                'nama'=>'MoA',
            ],
            [
                'nama'=>'IA',
            ],
        ];
  
        foreach ($user as $key => $value) {
            Dokumen::create($value);
        }
    }
}
