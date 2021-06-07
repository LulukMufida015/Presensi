<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'nip'=>'20210001',
            'nama_dosen'=>'Sehun',
            'jenis_kelamin'=>'1',
            'no_handphone'=>'081999222888',
            'alamat'=>'Seoul',
            ],
            [
                'nip'=>'20210002',
                'nama_dosen'=>'Suho',
                'jenis_kelamin'=>1,
                'no_handphone'=>'081999222888',
                'alamat'=>'Seoul',  
            ]
            ];
        DB::table('dosen')->insert($data);
    }
}
