<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(5)->create([
            'role' => 'Siswa',
            'password' => 'password123',
        ]);
    }
}
