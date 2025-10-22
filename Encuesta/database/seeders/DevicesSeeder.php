<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert(["serialNumber"=>'001',"deviceType"=>'Tablet',"brand"=>'Apple',"model"=>'ipad 7',"imeiNumber"=>'',"status"=>'En uso',"purchaseDate"=>'2025-10-10']);
        DB::table('devices')->insert(["serialNumber"=>'002',"deviceType"=>'Celular',"brand"=>'Apple',"model"=>'iphone 17',"imeiNumber"=>'12345678910',"status"=>'Disponible',"purchaseDate"=>'2025-10-10']);
    }
}
