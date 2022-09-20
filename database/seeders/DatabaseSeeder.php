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

    DB::table('Mahasiswa')->insert([
        'NIM' => '215150701111831',
        'ID_Program_Studi' => '2',
        'Nama' => 'Dinda Latifa Putri',
        'Angkatan' => '2021',
        'Email' => 'DindaLP@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '225150700111448',
        'ID_Program_Studi' => '2',
        'Nama' => 'Agung Wijaya',
        'Angkatan' => '2022',
        'Email' => 'AwiTI22@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '225150701111697',
        'ID_Program_Studi' => '1',
        'Nama' => 'Muhammad Farhan Sakha',
        'Angkatan' => '2022',
        'Email' => 'Sakhahama@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '215150707111711',
        'ID_Program_Studi' => '3',
        'Nama' => 'Raniya Salsabila',
        'Angkatan' => '2021',
        'Email' => 'Ranibila27@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '215150707111321',
        'ID_Program_Studi' => '2',
        'Nama' => 'Bagas Adi Putra',
        'Angkatan' => '2021',
        'Email' => 'AdiTX04@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '185150700111000',
        'ID_Program_Studi' => '2',
        'Nama' => 'Tiara Nadita Putri',
        'Angkatan' => '2018',
        'Email' => 'Tiara319@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '205150701111404',
        'ID_Program_Studi' => '3',
        'Nama' => 'Bintang Laksana',
        'Angkatan' => '2020',
        'Email' => 'Bintanglangit@student.ub.ac.id'
    ]);

    DB::table('Mahasiswa')->insert([
        'NIM' => '195150701111936',
        'ID_Program_Studi' => '1',
        'Nama' => 'Rangga Dewangga Bentar',
        'Angkatan' => '2019',
        'Email' => 'BentarbukanBentar@student.ub.ac.id'
    ]);

    DB::table('Dosen')->insert([
        'NIP' => '20190453122211030',
        'Nama' => 'Arya Bimasa',
        'No_Telpon' => '082927480123',
        'Email' => 'Aryasa20@gmail.com'
    ]);

    DB::table('Dosen')->insert([
        'NIP' => '196109051986011024',
        'Nama' => 'Puspita Dewi Ayu',
        'No_Telpon' => '081623019657',
        'Email' => 'Ayu123@gmail.com'
    ]);

    DB::table('Dosen')->insert([
        'NIP' => '20180452111612223',
        'Nama' => 'Dita Purnomo',
        'No_Telpon' => '085937540194',
        'Email' => 'ditapurnomo@gmail.com'
    ]);

    DB::table('Dosen')->insert([
        'NIP' => '195707121985031057',
        'Nama' => 'Ahmad Salam',
        'No_Telpon' => '082278653088',
        'Email' => 'Ahmad19@gmail.com'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '101',
        'NIP' => '20190453122211030',
        'NIM' => '195150707111530',
        'Mata_kuliah' => 'Pemrograman Aplikasi Web',
        'SKS' => '4'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '101',
        'NIP' => '20190453122211030',
        'NIM' => '205150700111456',
        'Mata_kuliah' => 'Pemrograman Aplikasi Web',
        'SKS' => '4'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '101',
        'NIP' => '20190453122211030',
        'NIM' => '215150701111831',
        'Mata_kuliah' => 'Pemrograman Aplikasi Web',
        'SKS' => '4'
    ]);
    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '101',
        'NIP' => '20190453122211030',
        'NIM' => '185150700111000',
        'Mata_kuliah' => 'Pemrograman Aplikasi Web',
        'SKS' => '4'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '101',
        'NIP' => '20190453122211030',
        'NIM' => '195150701111936',
        'Mata_kuliah' => 'Pemrograman Aplikasi Web',
        'SKS' => '4'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '102',
        'NIP' => '196109051986011024',
        'NIM' => '205150700111456',
        'Mata_kuliah' => 'Algoritma dan Struktur Data',
        'SKS' => '3'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '102',
        'NIP' => '196109051986011024',
        'NIM' => '225150700111448',
        'Mata_kuliah' => 'Algoritma dan Struktur Data',
        'SKS' => '3'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '102',
        'NIP' => '196109051986011024',
        'NIM' => '225150701111697',
        'Mata_kuliah' => 'Algoritma dan Struktur Data',
        'SKS' => '3'
    ]);

    DB::table('Mata_Kuliah')->insert([
        'Kode_MK' => '102',
        'NIP' => '196109051986011024',
        'NIM' => '195150707111530',
        'Mata_kuliah' => 'Algoritma dan Struktur Data',
        'SKS' => '3'
    ]);
    
}
}