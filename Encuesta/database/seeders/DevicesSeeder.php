<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert(["serialNumber"=>'001',"deviceType"=>'Tablet',"brand"=>'Apple',"model"=>'ipad 7',"imeiNumber"=>'',"status"=>'Disponible']);
        DB::table('devices')->insert(["serialNumber"=>'002',"deviceType"=>'Celular',"brand"=>'Apple',"model"=>'iphone 17',"imeiNumber"=>'12345678910',"status"=>'Disponible']);
    }
}
