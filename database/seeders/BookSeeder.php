<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::query()->insert([
            [
                "id" => 1,
                "publisher_id" => 1,
                "title" => "Harry Potter and the Philosopher's Stone",
                "author" => "J. K. Rowling",
                "year" => 1997,
                "synopsis" => "Harry Potter tinggal bersama bibi dan pamannya yang kejam, Vernon dan Petunia Dursley, dan putra mereka yang suka merisak, Dudley. Pada ulang tahun Harry yang kesebelas, seorang setengah raksasa bernama Rubeus Hagrid mengantarkan surat penerimaan Harry di Sekolah Sihir Hogwarts. Orang tua Harry, James dan Lily Potter, adalah penyihir. Ketika Harry berusia satu tahun, seorang penyihir hitam, jahat dan kuat yang menyebut dirinya Lord Voldemort membunuh orang tuanya. Harry selamat dari kutukan maut Voldemort yang dilontarkan kepadanya dan diyakini telah menghancurkan Pangeran Kegelapan. Kutukan tersebut meninggalkan bekas luka berbentuk sambaran petir di dahinya. Tanpa diketahui Harry, ia menjadi terkenal di dunia sihir.",
                "image" => "harry1.jpg"
            ],
            [
                "id" => 2,
                "publisher_id" => 1,
                "title" => "Harry Potter and the Chamber of Secrets",
                "author" => "J. K. Rowling",
                "year" => 1998,
                "synopsis" => "Harry Potter disuruh mempersiapkan rumah untuk kunjungan dari klien potensial Vernon Dursley. Namun, setelah selesai, paman Dursley menyuruh Harry ke kamarnya. Di kamar, Harry bertemu Dobby si peri rumah, ia memperingatkan Harry untuk tidak kembali ke Hogwarts. Ketika Harry menolak, Dobby menyebabkan kekacauan di rumah dan membuat Harry merusak pertemuan Vernon. Vernon mengunci Harry di kamarnya untuk mencegah kembali ke Hogwarts. Namun, Ron, Fred, dan George Weasley tiba dengan mobil terbang mereka untuk menyelamatkan Harry dari cengkeraman Paman Vernon, yang sedang berusaha untuk menarik Harry kembali ke kamarnya. Harry kemudian dibawa ke The Burrow, rumah keluarga Weasley.",
                "image" => "harry2.jpg"
            ],
            [
                "id" => 3,
                "publisher_id" => 1,
                "title" => "3600 Detik",
                "author" => "Charon",
                "year" => 2008,
                "synopsis" => "Sandra sangat terpukul ketika orang tuanya bercerai. Dan hatinya semakin sakit ketika ayahnya memutuskan ia harus tinggal bersama ibunya, yang selama ini tak pernah dekat dengannya. Kemarahan yang menggelora menjadikan Sandra remaja yang bandel. Berulang kali is di keluarkan dari sekolah karena kenakalannya yang di luar batas. Akhirnya ibunya memutuskan untuk pindah kota. Mungkin suasana dan lingkungan baru akan mengubah perilaku putrinya. Namun di sekolahnya yang baru ini Sandra sudah bertekad untuk membuat dirinya di keluarkan lagi. Ia bertekad untuk membuat ulah agar para guru tak tahan terhadapnya. Namun ia salah perkiraan. Pak Donny sangat sabar menhadapinya. Wali kelasnya itu berpendapat, mengeluarkan Sandra berarti menuruti keinginan anak bandel ini. Namun, lambat laun Sandra berubah. Orang tuanyapun heran. Mereka yakin Leon lah yang membuat gadis itu berubah. Mereka juga bertanya-tanya, kenapa Leon bisa bersahabat dengan Sandra, sementara murid-murid lain justru menjauhi gadis urakan itu. Apa yang membuat Leon tertarik padanya, padahal keduanya bagaikan bagaikan langit dan bumi. Leon adalah anak rumahan yang manis, bintang pelajar, sopan, tekun, berbeda seratus delapan puluh derajat dengan Sandra.",
                "image" => "3600detik.jpg"
            ],
            [
                "id" => 4,
                "publisher_id" => 2,
                "title" => "Filosofi Teras",
                "author" => "Henry Manampiring",
                "year" => 2018,
                "synopsis" => "Lebih dari 2.000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turunnya kehidupan. Jauh dari kesan filsafat sebagai topik berat dan mengawang-awang, Filosofi Teras justru bersifat praktis dan relevan dengan kehidupan Generasi Milenial dan Gen-Z masa kini.",
                "image" => "filosofiteras.jpg"
            ],
            [
                "id" => 5,
                "publisher_id" => 2,
                "title" => "Menjaga Kesejahteraan Mental: Diri Sendiri, Keluarga, dan Relasi",
                "author" => "Agustine Dwiputri",
                "year" => 2021,
                "synopsis" => "Kesejahteraan Mental adalah konsep penting yang sering diabaikan orang. Padahal, kesejahteraan mental adalah landasan untuk pengembangan diri yang sehat dan pembentukan hubungan yang sehat dengan orang lain. Terutama ketika tantangan hidup semakin kompleks. Diambil dari pengalaman nyata yang diceritakan kepada rubrik Konsultasi Psikologi Harian Kompas, buku ini berisi berbagai penjelasan dan jawaban dari berbagai keresahan yang mengganggu kesejahteraan mental. Dimulai dengan memahami kesejahteraan mental untuk diri sendiri, melebar dengan orangorang terdekat atau keluarga, kemudian dengan orangorang lain yang lebih luas hubungannya, dan saat menghadapi berbagai tantangan dalam hidup. Buku ini bisa dibaca dari awal, atau pada artikel mana saja yang pembaca anggap menarik atau penting untuk lebih dipahami. Pada bagian yang mana pun, penjelasan Agustine Dwiputri sebagai seorang psikolog akan membuka wawasan ten tang makna kesejahteraan mental.",
                "image" => "kesejahteraanmental.png"
            ],
            [
                "id" => 6,
                "publisher_id" => 3,
                "title" => "Inovasi dalam Proses Pembelajaran",
                "author" => "Achmad Noor Fatirul",
                "year" => 2022,
                "synopsis" => "Selama ini, pembelajaran di institusi pendidikan Indonesia terpaku pada sesi tatap muka di kelas, di mana guru menjelaskan di depan kelas, sementara murid menyimak dari bangku mereka. Terkadang, penyampaian materi oleh guru pun tidak maksimal karena guru kurang memanfaatkan teknologi-teknologi yang dapat membantu kelancaran pembelajaran di kelas. Terlebih, situasi pandemi saat ini mau tidak mau memaksa kita untuk ikut menyesuaikan proses pembelajaran siswa, yang salah satunya dilakukan dengan memanfaatkan teknologi informasi yang berkembang demikian pesatnya. Buku ini membahas tentang bagaimana inovasi pembelajaran seharusnya dilakukan dengan memanfaatkan teori teknologi pembelajaran dan kemajuan teknologi informasi yang berkembang, serta juga bagaimana seharusnya pembelajaran dilakukan. Secara garis besarnya, buku ini akan memaparkan kepada pembaca sekalian mengenai bagaimana proses inovasi dalam pembelajaran dilakukan dengan mengikuti cara-cara yang ada dalam teori pembelajaran.",
                "image" => "inovasipembelajaran.png"
            ],
            [
                "id" => 7,
                "publisher_id" => 4,
                "title" => "77 Cara Bodoh Hidup Bahagia",
                "author" => "Danang Priyadi",
                "year" => 2020,
                "synopsis" => "Anda pasti sering mendengar pernyataan berikut tentang kebahagiaan.
                . Saya tidak bahagia karena anak saya tidak berprestasi.
                . Saya tidak bahagia karena pasangan saya selalu sibuk dengan pekerjaannya.
                . Saya tidak bahagia karena saya tidak cantik.
                . Saya tidak bahagia karena saya bukan orang kaya.
                
                Melalui buku ini, saya ingin mengajak Anda untuk menggali dan menemukan desain kebahagian yang telah Tuhan berikan untuk masing-masing orang. Kebahagian bukan hanya hadiah yang diberikan ketika impian dan tujuan hidup terwujud. Akan tetapi, harus diciptakan dalam pikiran.",
                "image" => "77carabodoh.jpg"
            ],
            [
                "id" => 8,
                "publisher_id" => 4,
                "title" => "5cm : Aku, Kamu, Samudera, dan Bintang-Bintang",
                "author" => "Donny Dhirgantoro",
                "year" => 2020,
                "synopsis" => "Ia di sini sekarang, perjalanan pulang setelah Mahameru—Perjalanan Hati—puncak tertinggi Jawa, dan segala tentangnya. Alih pandangnya sekarang melihat jendela kereta

                Matarmaja yang melaju membawanya pulang menuju Jakarta. Pejaman mata dan tarikan nafasnya, seakan mencoba menjawab segala pertanyaan besar yang terus memenuhi benaknya semenjak kemarin Ranu Kumbolo hilang dari pandangannya. Pertanyaan-pertanyaan yang bukan dari siapa-siapa, tetapi dari dirinya sendiri.
                
                Teruntuk yang tidak lain adalah diriku sendiri... Zafran, manusia paling idealis, humanis, dan fantastis… Manusia paling keren di tongkrongan ini…
                
                Sebenarnya, untuk siapa kamu melakukan semua yang ingin kamu lakukan di dunia ini?
                Untuk kebahagiaan diri kamu? Atau untuk kebahagiaan orang lain?
                Apakah kamu seorang manusia yang hanya hidup untuk ngabis-ngabisin waktu aja? Celingak-celinguk, berbagi tanah, air, dan udara, namun tanpa tujuan. Menjadi manusia hanya untuk menuh-menuhin bumi, ngabisin airnya, ngabisin oksigennya. Hanya menjadi seonggok daging yang bisa berbicara, berjalan, dan punya nama—tanpa punya makna?
                
                Apakah kamu telah menjalani hidup yang kamu mau? Hidup yang kamu inginkan?
                Bukan yang orang lain inginkan dari kamu? Apakah kamu mencintai diri kamu sendiri?
                Apakah ada seseorang yang kamu cintai, lebih dari kamu mencintai diri kamu sendiri?
                Adakah cintamu yang terbalas? Atau mungkin tak terbalas? Atau ada yang begitu
                mencintaimu, tapi kamu tidak bisa membalasnya.
                
                Pernahkah kamu mengalami kesedihan yang luar biasa dalam hidup kamu?
                Pernahkah kamu mengalami kebahagiaan yang luar biasa dalam hidup kamu?
                Apakah kamu hidup dalam ketakutan-ketakutan kamu? Atau dalam harapan-harapan kamu?
                Apa yang harus kamu perbuat?
                
                Zafran termenung sejenak, namun beban pertanyaan yang baru saja menghunjam itu terasa ringan saat di bangku kereta, tak jauh darinya, ia melihat Genta, Riani, Ian, Arial, dan Dinda tersenyum kepadanya.",
                "image" => "5cmakukamusamudera.jpg"
            ],
            [
                "id" => 9,
                "publisher_id" => 4,
                "title" => "Ada Nama Yang Abadi Di Hati Tapi Tak Bisa Dinikahi",
                "author" => "Maman Suherman",
                "year" => 2020,
                "synopsis" => "Kupikir lucu juga
                Ketika diterima kuliah di ibukota
                Ibuku melepas dengan nasihat
                Hanya sepenggal kalimat:
                
                Kalau cari pasangan hidupmu
                Pilihlah yang tidak menistakanmu
                Cinta itu memuliakan
                Cinta itu tidak menghinakan
                Cinta itu meninggikan
                Cinta itu tidak merendahkan",
                "image" => "adanamayangabadi.jpg"
            ],
        ]);
    }
}