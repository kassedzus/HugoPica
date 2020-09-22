<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Cūkgaļas',
                'name_url' => 'cukgalas',
                'created_at' => '2020-09-22 20:23:21',
                'updated_at' => '2020-09-22 20:23:21',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Vistas',
                'name_url' => 'vistas',
                'created_at' => '2020-09-22 20:23:21',
                'updated_at' => '2020-09-22 20:23:21',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Mix',
                'name_url' => 'mix',
                'created_at' => '2020-09-22 20:23:21',
                'updated_at' => '2020-09-22 20:23:21',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Veģetārā',
                'name_url' => 'vegetara',
                'created_at' => '2020-09-22 20:24:00',
                'updated_at' => '2020-09-22 20:24:00',
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Vegānā',
                'name_url' => 'vegana',
                'created_at' => '2020-09-22 20:24:00',
                'updated_at' => '2020-09-22 20:24:00',
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Zivju',
                'name_url' => 'zivju',
                'created_at' => '2020-09-22 20:24:00',
                'updated_at' => '2020-09-22 20:24:00',
            ),
        ));
    }
}