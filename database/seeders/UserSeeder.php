<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@laravel.com',
            'role'      => 'Admin',
            'password'  => bcrypt('Bismillah')
        ]);
        $user = User::create([
            'name'      => 'Dosen',
            'email'     => 'dosen@laravel.com',
            'role'      => 'Dosen',
            'password'  => bcrypt('Bismillahdong')
        ]);
        $user = User::create([
            'name'      => 'Mahasiswa',
            'email'     => 'mahasiswa@laravel.com',
            'role'      => 'Mahasiswa',
            'password'  => bcrypt('Bismillahterus')
        ]);

    }
}
