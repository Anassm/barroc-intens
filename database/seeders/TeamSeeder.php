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
            'name' => ".",
            'personal_team' => "1",
        ]);
        DB::table('teams')->insert([
            'name' => "Finance",
            'personal_team' => "0",
        ]);
        DB::table('teams')->insert([
            'name' => "Sales",
            'personal_team' => "0",
        ]);
        DB::table('teams')->insert([
            'name' => "Inkoop",
            'personal_team' => "0",
        ]);
        DB::table('teams')->insert([
            'name' => "Maintenance",
            'personal_team' => "0",
        ]);
        DB::table('teams')->insert([
            'name' => ".",
            'personal_team' => "1",
        ]);
        DB::table('teams')->insert([
            'name' => ".",
            'personal_team' => "1",
        ]);
    }
}
