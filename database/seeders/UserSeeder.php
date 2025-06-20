<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();
        
        $user = new User();

        $user->name = 'Roberto';
        $user->email = 'ochoacuevasr@gmail.com';
        $user->password = bcrypt('12345678');

        $user->save();

        User::factory(count: 10)->create();
    }
}
