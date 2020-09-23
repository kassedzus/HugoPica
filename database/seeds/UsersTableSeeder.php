<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '12345678',
                'is_admin' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$7EWOYN/5u/OF8pw0J5lUH.VSHAQRftqfMQgQ24ohdtOjNus6FfS.y',
                'remember_token' => NULL,
                'created_at' => '2020-09-23 09:32:52',
                'updated_at' => '2020-09-23 09:32:52',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Frank Doe',
                'email' => 'frank@example.com',
                'phone' => '12345679',
                'is_admin' => 0,
                'email_verified_at' => NULL,
                'password' => '$2y$10$Jo/J7BoSf3wFZRM8oT0aRu7YlMRsDEXmsmnec58rWmz92iorIlGUa',
                'remember_token' => NULL,
                'created_at' => '2020-09-23 13:54:31',
                'updated_at' => '2020-09-23 13:54:31',
            ),
        ));
        
        
    }
}