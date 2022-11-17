<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeamUserSeeder::class,
            TeamSeeder::class,
            ProductsSeeder::class,
            ProductCategoriesSeeder::class,
            StoringSeeder::class,
        ]);
        $faker = Faker::create();
        foreach (range(1, 200) as $value) {
            DB::table('companies')->insert([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'street' => $faker->streetAddress,
                'house_number' => $faker->numberBetween(1, 200),
                'city' => $faker->city,
                'country_code' => $faker->countryCode,
                'contact_id' => 1,
            ]);
        }
    }
    

}
