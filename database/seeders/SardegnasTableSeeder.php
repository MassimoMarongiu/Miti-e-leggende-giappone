<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sardegna;

class SardegnasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 9; $i++) {
            $sardegnas = new Sardegna();
            $sardegnas->title =  $i;
            $sardegnas->body =  $i;
            $sardegnas->url =  '/img/Mitieleggendesardegna_img/' . $i . '.jpg';
            $sardegnas->save();
        }
    }
}
