<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use LaraBook\Statuses\Status;
use App\User;
use Carbon\Carbon;
class StatusTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Facker::create();

        foreach(range(1,50) as $index){
            $startDate = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 years', '+1 month')->getTimestamp());
            Status::create([
                'user_id' => $faker->numberBetween(1,50),
                'body' => $faker->paragraph.' '.$faker->paragraph,
                'created_at' => $startDate->toDateTimeString()
            ]);
        }
        //
    }
}
