<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssigmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('assignments')->insert(["userId"=>'1',"deviceId"=>'1',"returnDate"=>'2025-10-20',"assignedDate"=>'2025-10-10',"status"=>'En uso']);
    }
}
