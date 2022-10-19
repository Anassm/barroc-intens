<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement("INSERT INTO `team_user` (`id`, `team_id`, `user_id`, `role`, `created_at`, `updated_at`) VALUES
        (1, 1, 3, 'admin', NULL, NULL),
        (2, 2, 3, 'admin', NULL, NULL),
        (3, 3, 3, 'admin', NULL, NULL),
        (4, 4, 3, 'admin', NULL, NULL),
        (5, 5, 3, 'admin', NULL, NULL),
        (6, 1, 2, 'admin', NULL, NULL),
        (7, 2, 2, 'admin', NULL, NULL),
        (8, 3, 2, 'admin', NULL, NULL),
        (9, 4, 2, 'admin', NULL, NULL),
        (10, 5, 2, 'admin', NULL, NULL),
        (11, 1, 1, 'admin', NULL, NULL),
        (12, 2, 1, 'admin', NULL, NULL),
        (13, 3, 1, 'admin', NULL, NULL),
        (14, 4, 1, 'admin', NULL, NULL),
        (15, 5, 1, 'admin', NULL, NULL);");
        // DB::table('team_user')->insert([
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
           
        //     [  
        //         // 'id' => 0,
        //         'role' => "admin"
        //     ],
          
        // ]);
    }
}
