<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $dados=['name'=>"Murilo", 'email'=>"murilo@email",'password'=>bcrypt("123")];
=======
        $dados=['name'=>"Murilo", 'email'=>"admin@email",'password'=>bcrypt("123")];
>>>>>>> 830b4a4b7e7f0881f33efd7edb3cccbcedcda39c
        User::create($dados);
    }
}
