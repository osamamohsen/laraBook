<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{

    protected $tables = ['users','statuses'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->cleanDataBase();
        $this->call('UserTableSeeder');
        $this->call('StatusTableSeeder');
        Model::reguard();
    }


    public function cleanDataBase(){
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach($this->tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
