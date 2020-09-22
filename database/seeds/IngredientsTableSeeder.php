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
        
        DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Siers',
                'name_url' => 'siers',
                'category' => 'siers',
                'created_at' => '2020-09-22 19:47:50',
                'updated_at' => '2020-09-22 19:47:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mocarella siers',
                'name_url' => 'mocarella',
                'category' => 'siers',
                'created_at' => '2020-09-22 19:47:50',
                'updated_at' => '2020-09-22 19:47:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cietais siers',
                'name_url' => 'cietais_siers',
                'category' => 'siers',
                'created_at' => '2020-09-22 19:47:50',
                'updated_at' => '2020-09-22 19:47:50',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Zilais siers',
                'name_url' => 'zilais_siers',
                'category' => 'siers',
                'created_at' => '2020-09-22 19:47:50',
                'updated_at' => '2020-09-22 19:47:50',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Salami desa',
                'name_url' => 'salami',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:47:50',
                'updated_at' => '2020-09-22 19:47:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Prošuto',
                'name_url' => 'prosuto',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Ķiršu tomāti',
                'name_url' => 'kirsu_tomati',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Rukola',
                'name_url' => 'rukola',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Persiki',
                'name_url' => 'persiki',
                'category' => 'augļi',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Melnās olīvas',
                'name_url' => 'melnas_olivas',
                'category' => 'augļi',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Picu mērce',
                'name_url' => 'picu_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Tomātu mērce',
                'name_url' => 'tomatu_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Šķiņķis',
                'name_url' => 'skinkis',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:53:50',
                'updated_at' => '2020-09-22 19:53:50',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Tomāti',
                'name_url' => 'tomati',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:53:51',
                'updated_at' => '2020-09-22 19:53:51',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Paprika',
                'name_url' => 'paprika',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:53:51',
                'updated_at' => '2020-09-22 19:53:51',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Zaļās olīvas',
                'name_url' => 'zalas_olivas',
                'category' => 'augļi',
                'created_at' => '2020-09-22 19:53:51',
                'updated_at' => '2020-09-22 19:53:51',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Melnie pipari',
                'name_url' => 'melnie_pipari',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 19:54:22',
                'updated_at' => '2020-09-22 19:54:22',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Oregano',
                'name_url' => 'oregano',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 19:55:07',
                'updated_at' => '2020-09-22 19:55:07',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Sīpoli',
                'name_url' => 'sipoli',
                'category' => 'darzeni',
                'created_at' => '2020-09-22 19:55:07',
                'updated_at' => '2020-09-22 19:55:07',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bekons',
                'name_url' => 'bekons',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:55:33',
                'updated_at' => '2020-09-22 19:55:33',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Maltā gaļa',
                'name_url' => 'malta_gala',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:55:52',
                'updated_at' => '2020-09-22 19:55:52',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Steika mērce',
                'name_url' => 'steika_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 19:56:12',
                'updated_at' => '2020-09-22 19:56:12',
            ),
            22 => 
            array (
                'id' => 25,
                'name' => 'Zaļie lociņi',
                'name_url' => 'zalie_locini',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            23 => 
            array (
                'id' => 26,
                'name' => 'Sarkanie sīpoli',
                'name_url' => 'sarkanie_sipoli',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            24 => 
            array (
                'id' => 27,
                'name' => 'Jalapeno pipari',
                'name_url' => 'jalapeno',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            25 => 
            array (
                'id' => 28,
                'name' => 'Kukurūza',
                'name_url' => 'kukuruza',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            26 => 
            array (
                'id' => 29,
                'name' => 'Pupiņas',
                'name_url' => 'pupinas',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            27 => 
            array (
                'id' => 30,
                'name' => 'Vistas fileja',
                'name_url' => 'vistas_fileja',
                'category' => 'gaļa',
                'created_at' => '2020-09-22 19:58:46',
                'updated_at' => '2020-09-22 19:58:46',
            ),
            28 => 
            array (
                'id' => 31,
                'name' => 'Marinēta paprika',
                'name_url' => 'marineta_paprika',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 19:59:18',
                'updated_at' => '2020-09-22 19:59:18',
            ),
            29 => 
            array (
                'id' => 32,
                'name' => 'Svaigi spināti',
                'name_url' => 'spinati',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 19:59:48',
                'updated_at' => '2020-09-22 19:59:48',
            ),
            30 => 
            array (
                'id' => 33,
                'name' => 'Nogatavināts svaigais siers',
                'name_url' => 'nogatavinats_siers',
                'category' => 'siers',
                'created_at' => '2020-09-22 20:00:16',
                'updated_at' => '2020-09-22 20:00:16',
            ),
            31 => 
            array (
                'id' => 34,
                'name' => 'Gurķu mērce',
                'name_url' => 'gurku_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 20:00:55',
                'updated_at' => '2020-09-22 20:00:55',
            ),
            32 => 
            array (
                'id' => 35,
                'name' => 'Vegānu siers',
                'name_url' => 'veganu_siers',
                'category' => 'siers',
                'created_at' => '2020-09-22 20:01:17',
                'updated_at' => '2020-09-22 20:01:21',
            ),
            33 => 
            array (
                'id' => 36,
                'name' => 'Marinēti gurķi',
                'name_url' => 'marineti_gurki',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 20:02:12',
                'updated_at' => '2020-09-22 20:02:12',
            ),
            34 => 
            array (
                'id' => 37,
                'name' => 'Pesto mērce',
                'name_url' => 'pesto',
                'category' => 'mērces',
                'created_at' => '2020-09-22 20:02:33',
                'updated_at' => '2020-09-22 20:02:33',
            ),
            35 => 
            array (
                'id' => 38,
                'name' => 'Pētresīļi',
                'name_url' => 'petersili',
                'category' => 'garšvielas',
                'created_at' => '2020-09-22 20:03:21',
                'updated_at' => '2020-09-22 20:03:21',
            ),
            36 => 
            array (
                'id' => 39,
                'name' => 'Saldskābā mērce',
                'name_url' => 'saldskaba_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 20:03:53',
                'updated_at' => '2020-09-22 20:03:53',
            ),
            37 => 
            array (
                'id' => 40,
                'name' => 'BBQ mērce',
                'name_url' => 'bbq_merce',
                'category' => 'mērces',
                'created_at' => '2020-09-22 20:04:16',
                'updated_at' => '2020-09-22 20:04:16',
            ),
            38 => 
            array (
                'id' => 41,
                'name' => 'Sēnes',
                'name_url' => 'senes',
                'category' => 'dārzeņi',
                'created_at' => '2020-09-22 20:04:38',
                'updated_at' => '2020-09-22 20:04:38',
            ),
            39 => 
            array (
                'id' => 42,
                'name' => 'Ananāsi',
                'name_url' => 'ananasi',
                'category' => 'augļi',
                'created_at' => '2020-09-22 20:05:18',
                'updated_at' => '2020-09-22 20:05:18',
            ),
        ));
        
        
    }
}