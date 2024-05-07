<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\MitiELeggende;
use Illuminate\Support\Facades\File;

class MitiELeggendeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imageDirectory = public_path('/img/Mitieleggendegiappone_img/');
        $imageFiles = File::files($imageDirectory);

        foreach ($imageFiles as $imageFile) {
            $fileName = pathinfo($imageFile, PATHINFO_FILENAME);

            $mitieleggendegiappone = new MitiELeggende();
            $mitieleggendegiappone->title = $fileName;
            $mitieleggendegiappone->body =  $fileName;
            $mitieleggendegiappone->url = '/img/Mitieleggendegiappone_img/' . $fileName . '.jpg';

            $mitieleggendegiappone->save();
        }
    }
}
