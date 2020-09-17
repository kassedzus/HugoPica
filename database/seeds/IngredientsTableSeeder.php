<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('ingredients')->delete();

        DB::table('ingredients')->insert(array(
            0 =>
            array(
                'created_at' => '2020-08-05 16:07:30',
                'id' => 1,
                'name' => 'Tomātu mērce',
                'name_url' => 'tomatu_merce',
                'updated_at' => '2020-08-05 16:07:30',
            ),
            1 =>
            array(
                'created_at' => '2020-08-05 16:07:30',
                'id' => 2,
                'name' => 'Siers',
                'name_url' => 'siers',
                'updated_at' => '2020-08-05 16:07:30',
            ),
            2 =>
            array(
                'created_at' => '2020-08-05 16:07:30',
                'id' => 3,
                'name' => 'Salami desa',
                'name_url' => 'salami',
                'updated_at' => '2020-08-05 16:07:30',
            ),
            3 =>
            array(
                'created_at' => '2020-08-05 16:08:01',
                'id' => 4,
                'name' => 'Šķinķis',
                'name_url' => 'skinkis',
                'updated_at' => '2020-08-05 16:08:01',
            ),
            4 =>
            array(
                'created_at' => '2020-08-05 16:08:01',
                'id' => 5,
                'name' => 'Ananāsi',
                'name_url' => 'ananasi',
                'updated_at' => '2020-08-05 16:08:01',
            ),
            5 =>
            array(
                'created_at' => '2020-08-05 16:08:01',
                'id' => 6,
                'name' => 'Paprika',
                'name_url' => 'paprika',
                'updated_at' => '2020-08-05 16:08:01',
            ),
            6 =>
            array(
                'created_at' => '2020-08-05 16:08:17',
                'id' => 7,
                'name' => 'Sarkanie sīpoli',
                'name_url' => 'sarkanie_sipoli',
                'updated_at' => '2020-08-05 16:08:17',
            ),
            7 =>
            array(
                'created_at' => '2020-08-05 20:02:23',
                'id' => 8,
                'name' => 'Bekons',
                'name_url' => 'bekons',
                'updated_at' => '2020-08-05 20:02:23',
            ),
            8 =>
            array(
                'created_at' => '2020-08-05 20:02:41',
                'id' => 9,
                'name' => 'Maltā gaļa',
                'name_url' => 'malta_gala',
                'updated_at' => '2020-08-05 20:02:41',
            ),
            9 =>
            array(
                'created_at' => '2020-08-05 20:02:51',
                'id' => 10,
                'name' => 'Tomāti',
                'name_url' => 'tomati',
                'updated_at' => '2020-08-05 20:02:51',
            ),
            10 =>
            array(
                'created_at' => '2020-08-05 20:03:03',
                'id' => 11,
                'name' => 'Steika mērce',
                'name_url' => 'steika_merce',
                'updated_at' => '2020-08-05 20:03:03',
            ),
            11 =>
            array(
                'created_at' => '2020-08-05 20:03:14',
                'id' => 12,
                'name' => 'Melnie pipari',
                'name_url' => 'melnie_pipari',
                'updated_at' => '2020-08-05 20:03:14',
            ),
            12 =>
            array(
                'created_at' => '2020-08-05 20:03:24',
                'id' => 13,
                'name' => 'Zaļie lociņi',
                'name_url' => 'locini',
                'updated_at' => '2020-08-05 20:03:24',
            ),
            13 =>
            array(
                'created_at' => '2020-08-05 20:07:28',
                'id' => 15,
                'name' => 'Vistas fileja',
                'name_url' => 'vista',
                'updated_at' => '2020-08-05 20:07:28',
            ),
            14 =>
            array(
                'created_at' => '2020-08-05 20:07:42',
                'id' => 16,
                'name' => 'Ķiploki',
                'name_url' => 'kiploki',
                'updated_at' => '2020-08-05 20:07:42',
            ),
            15 =>
            array(
                'created_at' => '2020-08-05 20:13:07',
                'id' => 17,
                'name' => 'Sīpoli',
                'name_url' => 'sipoli',
                'updated_at' => '2020-08-05 20:13:07',
            ),
            16 =>
            array(
                'created_at' => '2020-08-05 20:14:45',
                'id' => 18,
                'name' => 'Vegānu siers',
                'name_url' => 'veganu_siers',
                'updated_at' => '2020-08-05 20:14:45',
            ),
            17 =>
            array(
                'created_at' => '2020-08-05 20:14:45',
                'id' => 19,
                'name' => 'Ķiršu tomāti',
                'name_url' => 'kirsu_tomati',
                'updated_at' => '2020-08-05 20:14:45',
            ),
            18 =>
            array(
                'created_at' => '2020-08-05 20:14:45',
                'id' => 20,
                'name' => 'Rukola',
                'name_url' => 'rukola',
                'updated_at' => '2020-08-05 20:14:45',
            ),
        ));
    }
}