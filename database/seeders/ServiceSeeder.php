<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                "name" => "all room",
                "main_fee" => 200000,
                "cleaner_fee" => 25000,
                "cleaner_tools" => 15000
            ],
        ];

        foreach ($datas as $data) {
            $service = new Service();
            $service->name = $data["name"];
            $service->main_fee = $data["main_fee"];
            $service->cleaner_fee = $data["cleaner_fee"];
            $service->cleaner_tools = $data["cleaner_tools"];
            $service->save();
        }
    }
}
