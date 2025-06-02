<?php

namespace Database\Seeders;

use App\Models\Movement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movements')->delete();

        Movement::factory()
            ->count(100)
            ->create();
    }
}
