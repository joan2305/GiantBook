<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::query()->insert([
            [
                "id" => 1,
                "name" => "Gramedia Pustaka Utama",
                "address" => "Jl. Gajah Mada 104-107 Jakarta Barat,DKI Jakarta 11140",
                "phone" => "+62 21 2601 234",
                "email" => "gam00@gramedia.com",
                "image" => "gramedia.png"
            ],
            [
                "id" => 2,
                "name" => "Penerbit Buku Kompas",
                "address" => "Jalan Palmerah Selatan 26-28 Jakarta Pusat, DKI Jakarta, Indonesia 10270",
                "phone" => "+62 21 2567 6000",
                "email" => "hotline@kompas.id",
                "image" => "kompas.png"
            ],
            [
                "id" => 3,
                "name" => "PT. Penerbit Erlangga",
                "address" => "Jl. H. Baping Raya No. 100 Ciracas Jakarta 13740  ",
                "phone" => "+62 21 8717 006",
                "email" => "support@erlangga.co.id",
                "image" => "erlangga.jpg"
            ],
            [
                "id" => 4,
                "name" => "Grasindo",
                "address" => "PT. GRAMEDIA WIDIASARANA INDONESIA Gd. Kompas Gramedia Unit I, Lt. 3 Jalan Palmerah Barat 33-37, Jakarta 10270 - Indonesia",
                "phone" => "+62 21 536 50110",
                "email" => "redaksi@grasindo.id",
                "image" => "grasindo.jpg"
            ],
            
        ]);
    }
}