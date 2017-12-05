<?php

namespace database\seeds;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends \DatabaseSeeder
{
    // create 100 user table recrods
    // that will be created in the database

    public function run() {
        factory('App\User', 100)->create();
    }
}
