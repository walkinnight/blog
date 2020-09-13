<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //统一在这里运行
        Model::unguard();

        $this->call(UsersTableSeeder::class);

        Model::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
