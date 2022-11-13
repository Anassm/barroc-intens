<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                // 'id' => 0,
                'name' => "aparaat",
                'is_employee_only' => "0",
            ],
            [
                // 'id' => 1,
                'name' => "Bonen",
                'is_employee_only' => "0",
            ],
        ]);
    }
}
