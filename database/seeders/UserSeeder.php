<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Stringable;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        # --JETSTREAM GEBRUIKERS--
        DB::table('users')->insert([
            # --Anass--
            [
                // 'id' => 0,
                'name' => "Anass",
                'email' => "testAnass@test.nl",
                'password' => '$2y$10$ZFX6ucM/vo/f5lsvpA9RteGQxOQzH.qXqFMcAJmeqoIeAnWBCZQ2W',
                'current_team_id' => '4'
            ],
            # --Robin--
            [
                // 'id' => 1,
                'name' => "Robin",
                'email' => "testRobin@test.nl",
                'password' => '$2y$10$PfsPKXwJSzMDUTOS3OgsXuXnafzYEEWu.Il.N5PKHs5UP/Ys0d5RK',
                'current_team_id' => '6'
            ],
            # --Gino--
            [
                // 'id' => 2,
                'name' => "Gino",
                'email' => "testGino@test.nl",
                'password' => '$2y$10$awYd20ln4BfY/CELc5CSGOA0HhJ99DE.4TZP94QIvxokesPlwlIp6',
                'current_team_id' => '7'
            ]
        ]);
    }
}