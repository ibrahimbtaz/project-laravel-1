<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Siswa::factory(10)->create();

        Kelas::create([
            'kode' => 'AB',
            'kelas' => '11 RPL 2',
        ]);

        Kelas::create([
            'kode' => 'AC',
            'kelas' => '11 RPL 1',
        ]);

        Kelas::create([
            'kode' => 'AD',
            'kelas' => '11 DG 2',
        ]);

        Kelas::create([
            'kode' => 'AE',
            'kelas' => '11 DKV 2',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
