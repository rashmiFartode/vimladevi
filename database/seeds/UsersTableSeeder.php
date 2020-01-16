<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'admin@admin.com')->first();

        if (!$admin) {
            User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ]);
        }

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user123'),
            'role' => 'user'
        ]);
    }
}
