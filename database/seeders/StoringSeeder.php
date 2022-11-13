<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement("INSERT INTO `storing` (`id`, `status`, `link`, `created_at`, `updated_at`) VALUES
        (1, 'Submitted', 'http://barroc-intens.test', now(), now()),
        (2, 'Failed', 'http://barroc-intens.test', now(), now()),
        (3, 'Unknown', 'http://barroc-intens.test', now(), now())");
    }
}
