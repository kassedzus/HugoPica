<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array(
            0 =>
            array(
                'created_at' => '2020-08-25 20:06:03',
                'email' => 'john@example.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'is_admin' => 0,
                'name' => 'John Doe',
                'password' => '$2y$10$4TvQq1Yxg1x/nQA3KpTjQOwAgv4s.BzBqHTV7b2Y.2uS/ndriK.p2',
                'phone' => '12345678',
                'remember_token' => NULL,
                'updated_at' => '2020-08-25 20:06:03',
            ),
        ));
    }
}