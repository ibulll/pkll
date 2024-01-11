<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Siswa',
                'email'=>'siswa@gmail.com',
                'role'=>'siswa',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Wakahubin',
                'email'=>'wakahubin@gmail.com',
                'role'=>'wakahubin',
                'password'=>bcrypt('12345')
            ],
            [
                'name'=>'Pembimbing',
                'email'=>'pembimbing@gmail.com',
                'role'=>'pembimbing',
                'password'=>bcrypt('12345')
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
