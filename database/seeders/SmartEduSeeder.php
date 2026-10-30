<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

use Illuminate\Support\Facades\DB;
class SmartEduSeeder extends Seeder
{
    public function run(): void
    {
        $password = Hash::make('password123');

        $users = [
            ['name' => 'Agus Setiawan', 'email' => 'agus.setiawan@smartedu.test', 'role' => 'Staff TU'],
            ['name' => 'Dewi Lestari', 'email' => 'dewi.lestari@smartedu.test', 'role' => 'Staff TU'],
            ['name' => 'Budi Santoso', 'email' => 'budi.santoso@smartedu.test', 'role' => 'Guru'],
            ['name' => 'Siti Aisyah', 'email' => 'siti.aisyah@smartedu.test', 'role' => 'Guru'],
            ['name' => 'Rina Permata', 'email' => 'rina.permata@smartedu.test', 'role' => 'Guru'],
            ['name' => 'Andi Pratama', 'email' => 'andi.pratama@smartedu.test', 'role' => 'Siswa'],
            ['name' => 'Nabila Putri', 'email' => 'nabila.putri@smartedu.test', 'role' => 'Siswa'],
            ['name' => 'Fajar Ramadhan', 'email' => 'fajar.ramadhan@smartedu.test', 'role' => 'Siswa'],
            ['name' => 'Maya Kartika', 'email' => 'maya.kartika@smartedu.test', 'role' => 'Orang Tua'],
            ['name' => 'Hendra Wijaya', 'email' => 'hendra.wijaya@smartedu.test', 'role' => 'Orang Tua'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                [...$user, 'password' => $password, 'email_verified_at' => now()]
            );
        }

        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 15; $i++) {
            DB::table('modules')->insert([
                'kode_modul' => 'MOD-' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'judul' => $faker->randomElement([
                    'Bilangan Dasar',
                    'Makhluk Hidup di Sekitar Kita',
                    'Membaca dan Menulis Kalimat',
                    'Keragaman Budaya Indonesia',
                    'Pendidikan Pancasila',
                    'Seni dan Pola Irama',
                    'Gerak Dasar dan Kebugaran',
                    'Kosakata Bahasa Inggris',
                    'Pecahan dalam Kehidupan Sehari-hari',
                    'Menjaga Lingkungan Sekolah',
                ]),
                'mata_pelajaran' => $faker->randomElement([
                    'Matematika',
                    'Ilmu Pengetahuan Alam',
                    'Bahasa Indonesia',
                    'Ilmu Pengetahuan Sosial',
                    'Pendidikan Pancasila',
                    'Seni Budaya',
                    'Pendidikan Jasmani',
                    'Bahasa Inggris',
                ]),
                'kelas' => 'Kelas ' . $faker->numberBetween(1, 6),
            ]);
        }
    }
}
