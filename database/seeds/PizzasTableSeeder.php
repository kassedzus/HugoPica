<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('pizzas')->delete();

        DB::table('pizzas')->insert(array(
            0 =>
            array(
                'avatar' => '',
                'category' => 'Cūkgaļas',
                'category_url' => 'cukgalas',
                'created_at' => '2020-08-05 16:05:46',
                'id' => 1,
                'name' => 'Desu pica',
                'name_url' => 'desu',
                'price' => '9.99',
                'updated_at' => '2020-08-05 16:05:46',
            ),
            1 =>
            array(
                'avatar' => '',
                'category' => 'Cūkgaļas',
                'category_url' => 'cukgalas',
                'created_at' => '2020-08-05 16:06:08',
                'id' => 2,
                'name' => 'Tropiskā pica',
                'name_url' => 'tropiska',
                'price' => '11.99',
                'updated_at' => '2020-08-05 16:06:08',
            ),
            2 =>
            array(
                'avatar' => '',
                'category' => 'Cūkgaļas',
                'category_url' => 'cukgalas',
                'created_at' => '2020-08-05 19:58:33',
                'id' => 3,
                'name' => 'Rembo pica',
                'name_url' => 'rembo',
                'price' => '11.99',
                'updated_at' => '2020-08-05 19:58:33',
            ),
            3 =>
            array(
                'avatar' => '',
                'category' => 'Vistas',
                'category_url' => 'vistas',
                'created_at' => '2020-08-05 19:58:44',
                'id' => 4,
                'name' => 'Vistas pica',
                'name_url' => 'vistas',
                'price' => '10.99',
                'updated_at' => '2020-08-05 19:58:44',
            ),
            4 =>
            array(
                'avatar' => '',
                'category' => 'Bez gaļas',
                'category_url' => 'bez_galas',
                'created_at' => '2020-08-05 19:58:58',
                'id' => 5,
                'name' => 'Siera pica',
                'name_url' => 'siera',
                'price' => '8.99',
                'updated_at' => '2020-08-05 19:58:58',
            ),
            5 =>
            array(
                'avatar' => '',
                'category' => 'Cūkgaļas',
                'category_url' => 'cukgalas',
                'created_at' => '2020-08-05 19:59:39',
                'id' => 6,
                'name' => 'Bekona pica',
                'name_url' => 'bekona',
                'price' => '10.99',
                'updated_at' => '2020-08-05 19:59:39',
            ),
            6 =>
            array(
                'avatar' => '',
                'category' => 'Veģētārā',
                'category_url' => 'vegetara',
                'created_at' => '2020-08-05 20:00:24',
                'id' => 7,
                'name' => 'Veģetārā pica',
                'name_url' => 'vegetara',
                'price' => '10.99',
                'updated_at' => '2020-08-05 20:00:24',
            ),
        ));
    }
}