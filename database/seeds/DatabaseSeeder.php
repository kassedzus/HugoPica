<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(PizzasTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);        
        $this->call(CategoriesTableSeeder::class);
        // $this->call(IngredientPizzaTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);

    }
}