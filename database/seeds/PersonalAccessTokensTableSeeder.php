<?php

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\User',
                'tokenable_id' => 1,
                'name' => 'api_key',
                'token' => 'c3ce07072c4287932cb1454bccdcb042c2546f1baf4240e8ec3c81498ebeb1db',
                'abilities' => '["*"]',
                'last_used_at' => '2020-09-23 13:17:47',
                'created_at' => '2020-09-23 09:32:52',
                'updated_at' => '2020-09-23 13:17:47',
            ),
            1 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\User',
                'tokenable_id' => 2,
                'name' => 'api_key',
                'token' => 'aa7168c83a58cf6e1fc972724aa57ba9af0d163574af3be7afcb4129721b5ec9',
                'abilities' => '["*"]',
                'last_used_at' => NULL,
                'created_at' => '2020-09-23 13:54:57',
                'updated_at' => '2020-09-23 13:54:57',
            ),
        ));
        
        
    }
}