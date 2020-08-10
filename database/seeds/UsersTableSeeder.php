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
        $data1 = User::create([
            'name' => 'Bemo Admin',
            'email' => 'bemo@hellenpastana.com',
            'password' => Hash::make('bemo123!'),
        ]);

        $data2 = User::create([
            'name' => 'Hellen Pastana',
            'email' => 'hellen@hellenpastana.com',
            'password' => Hash::make('developer2020'),
        ]);
    }
}
