<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('personal_access_tokens')->delete();

        DB::table('personal_access_tokens')->insert(array(
            0 =>
            array(
                'abilities' => '["*"]',
                'created_at' => '2020-09-12 12:34:03',
                'id' => 1,
                'last_used_at' => NULL,
                'name' => 'token-name',
                'token' => '1190ef0bd9cdf03daa7c67689d1b55e9332ce5367d8c6452d95a733e574ddcd5',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\User',
                'updated_at' => '2020-09-12 12:34:03',
            ),
        ));
    }
}
