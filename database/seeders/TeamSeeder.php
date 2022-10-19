<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # --Placeholder--
        DB::table('teams')->insert([
            [
                // 'id' => 0,
                'name' => ".",
                'personal_team' => "1"
            ],
            [
                // 'id' => 1,
                'name' => "Finance",
                'personal_team' => "0"
            ],
            [
                // 'id' => 2,
                'name' => "Sales",
                'personal_team' => "0"
            ],
            [
                // 'id' => 3,
                'name' => "Inkoop",
                'personal_team' => "0"
            ],
            [
                // 'id' => 4,
                'name' => "Maintenance",
                'personal_team' => "0"
            ],
            [
                // 'id' => 5,
                'name' => ".",
                'personal_team' => "1"
            ],
            [
                // 'id' => 6,
                'name' => ".",
                'personal_team' => "1"
            ],
        ]);
    }
}
