<?php

namespace Database\Seeders;

use App\Models\Cleaner;
use Illuminate\Database\Seeder;

class CleanerSeeder extends Seeder
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
                "name"      => "alex",
                "photo"     => "/img/avatar.jpeg",
                "phone"     => "08127319912",
                "rating"    => 4.3,
                "fee"       => 25000,
            ],
            [
                "name"      => "ramaditya",
                "photo"     => "/img/avatar.jpeg",
                "phone"     => "08127319912",
                "rating"    => 4.7,
                "fee"       => 25000,
            ],
            [
                "name"      => "jackson",
                "photo"     => "/img/avatar.jpeg",
                "phone"     => "08127319912",
                "rating"    => 4.9,
                "fee"       => 25000,
            ],
            [
                "name"      => "bobby",
                "photo"     => "/img/avatar.jpeg",
                "phone"     => "08127319912",
                "rating"    => 4.1,
                "fee"       => 25000,
            ],
            [
                "name"      => "reza",
                "photo"     => "/img/avatar.jpeg",
                "phone"     => "08127319912",
                "rating"    => 4.7,
                "fee"       => 25000,
            ],
        ];

        foreach ($datas as $data) {
            $cleaner = new Cleaner();
            $cleaner->name      = $data["name"];
            $cleaner->photo     = $data["photo"];
            $cleaner->phone     = $data["phone"];
            $cleaner->rating    = $data["rating"];
            $cleaner->fee       = $data["fee"];
            $cleaner->save();
        }
    }
}
