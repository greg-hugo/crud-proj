<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'grekz',
            'email' => 'tpm@gmail.com',
            'password' => Hash::make('tpmtpm123'),
            'role' => 'admin'
        ]);
    }
}
