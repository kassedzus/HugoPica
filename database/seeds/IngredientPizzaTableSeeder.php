<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientPizzaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('ingredient_pizza')->delete();

        DB::table('ingredient_pizza')->insert(array(
            0 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 1,
                'ingredient_id' => 1,
                'pizza_id' => 1,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            1 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 2,
                'ingredient_id' => 2,
                'pizza_id' => 1,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            2 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 3,
                'ingredient_id' => 3,
                'pizza_id' => 1,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            3 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 4,
                'ingredient_id' => 1,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            4 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 5,
                'ingredient_id' => 2,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            5 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 6,
                'ingredient_id' => 4,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            6 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 7,
                'ingredient_id' => 5,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            7 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 8,
                'ingredient_id' => 6,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            8 =>
            array(
                'created_at' => '2020-08-05 16:09:51',
                'id' => 9,
                'ingredient_id' => 7,
                'pizza_id' => 2,
                'updated_at' => '2020-08-05 16:09:51',
            ),
            9 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 11,
                'ingredient_id' => 2,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            10 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 12,
                'ingredient_id' => 8,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            11 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 13,
                'ingredient_id' => 9,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            12 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 14,
                'ingredient_id' => 10,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            13 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 15,
                'ingredient_id' => 11,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            14 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 16,
                'ingredient_id' => 12,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            15 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 17,
                'ingredient_id' => 13,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            16 =>
            array(
                'created_at' => '2020-08-05 20:05:05',
                'id' => 18,
                'ingredient_id' => 7,
                'pizza_id' => 3,
                'updated_at' => '2020-08-05 20:05:05',
            ),
            17 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 26,
                'ingredient_id' => 1,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            18 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 27,
                'ingredient_id' => 2,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            19 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 28,
                'ingredient_id' => 3,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            20 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 29,
                'ingredient_id' => 15,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            21 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 30,
                'ingredient_id' => 10,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            22 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 31,
                'ingredient_id' => 12,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            23 =>
            array(
                'created_at' => '2020-08-05 20:09:31',
                'id' => 32,
                'ingredient_id' => 16,
                'pizza_id' => 4,
                'updated_at' => '2020-08-05 20:09:31',
            ),
            24 =>
            array(
                'created_at' => '2020-08-05 20:10:24',
                'id' => 33,
                'ingredient_id' => 1,
                'pizza_id' => 5,
                'updated_at' => '2020-08-05 20:10:24',
            ),
            25 =>
            array(
                'created_at' => '2020-08-05 20:10:24',
                'id' => 34,
                'ingredient_id' => 2,
                'pizza_id' => 5,
                'updated_at' => '2020-08-05 20:10:24',
            ),
            26 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 49,
                'ingredient_id' => 2,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            27 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 50,
                'ingredient_id' => 8,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            28 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 51,
                'ingredient_id' => 10,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            29 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 52,
                'ingredient_id' => 1,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            30 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 53,
                'ingredient_id' => 12,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            31 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 54,
                'ingredient_id' => 13,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:07',
            ),
            32 =>
            array(
                'created_at' => '2020-08-05 20:13:25',
                'id' => 55,
                'ingredient_id' => 17,
                'pizza_id' => 6,
                'updated_at' => '2020-08-05 20:13:29',
            ),
            33 =>
            array(
                'created_at' => '2020-08-05 20:16:58',
                'id' => 56,
                'ingredient_id' => 1,
                'pizza_id' => 7,
                'updated_at' => '2020-08-05 20:16:58',
            ),
            34 =>
            array(
                'created_at' => '2020-08-05 20:16:58',
                'id' => 57,
                'ingredient_id' => 18,
                'pizza_id' => 7,
                'updated_at' => '2020-08-05 20:16:58',
            ),
            35 =>
            array(
                'created_at' => '2020-08-05 20:16:58',
                'id' => 58,
                'ingredient_id' => 19,
                'pizza_id' => 7,
                'updated_at' => '2020-08-05 20:16:58',
            ),
            36 =>
            array(
                'created_at' => '2020-08-05 20:16:58',
                'id' => 59,
                'ingredient_id' => 20,
                'pizza_id' => 7,
                'updated_at' => '2020-08-05 20:16:58',
            ),
        ));
    }
}