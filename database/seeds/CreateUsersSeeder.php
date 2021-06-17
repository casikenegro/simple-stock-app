<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('admin');
        
        $user = User::create([
            'name' => 'employee',
            'email' => 'employee@employee.com',
            'password' => bcrypt('123456'),
            'email_verified_at' => now(),
        ]);
        $user->assignRole('employee');

    }
}
