<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker = Facker::create();

        foreach(range(1,50) as $index){
            User::create([
                 'username' => $facker->userName.$index,
                'email' => $facker->email,
                'password' => 'secret'
            ]);
        }
        //
    }
}
