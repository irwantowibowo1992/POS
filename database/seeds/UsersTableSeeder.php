<?php

use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Irwanto Wibowo',
            'email' => 'irwanto@gmail.com',
            'password' => bcrypt('irwanto'),
            'status' => true
        ]);
    }
}
