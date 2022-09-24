<?php

use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\User::create([
       	'name'=>'asaad',
       	'email'=>'asaad21@yahoo.com',
       	'admin'=>1,
       	'password'=>bcrypt('123')

       	]);
    }
}
