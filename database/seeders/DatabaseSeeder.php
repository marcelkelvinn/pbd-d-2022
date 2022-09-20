<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    DB::table('Program_Studi')->insert([
        'ID_Program_Studi' => '1',
        'Prodi' => 'Sistem Informasi'
    ]);

    DB::table('Program_Studi')->insert([
        'ID_Program_Studi' => '2',
        'Prodi' => 'Teknologi Informasi'
    ]);

    DB::table('Program_Studi')->insert([
        'ID_Program_Studi' => '3',
        'Prodi' => 'Pendidikan Teknologi Informasi'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '195150707111530',
        'ID_Program_Studi' => '1',
        'Nama' => 'Rihan Malik',
        'Angkatan' => '2019',
        'Email' => 'RihanMalik@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '205150700111456',
        'ID_Program_Studi' => '3',
        'Nama' => 'Salsabila Cinta',
        'Angkatan' => '2020',
        'Email' => 'CintaSalsa@student.ub.ac.id'
    ]);
    }
}