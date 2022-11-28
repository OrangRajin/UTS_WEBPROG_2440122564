<?php

namespace Database\Seeders;

use App\Models\books;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            [
                'publisher_id' => 1,
                'title' => 'MEMBANGUN PERADABAN MULIA',
                'author' => 'AHMAD HERYAWAN-SUHERMAN',
                'year' => '2016',
                'synopsis' =>'Buku ini berisi pandangan-pandangan Ahmad Heryawan  dalam merespons berbagai macam dimensi kehidupan berbangsa dan bernegara. Visi kebangsaannya yang bercorak nasionalis-religius sangat mewarnai kebijakannya dalam pembangunan di jawa barat.',
                'image' => ''
            ],
            [
                'publisher_id' => 2,
                'title' => 'URBAN ROMANCE: BEGINS',
                'author' => 'TITI SANARIA',
                'year' => '-',
                'synopsis' =>'Pada malam dia berpikir akan dilamar, Kessa malah diputuskan Jayaz, kekasihnya selama enam tahun terakhir. Mengira traveling keliling Indonesia Timur akan bisa menyembuhkan luka hatinya, Kessa menerima rekomendasi temannya untuk melakukan perjalanan bersama Narendra, fotografer berbakat yang tengah melakukan riset untuk bukunya. Siapa sangka itu menjadi pemicu masalah baru?

                Meski Narendra—yang tidak ingin berurusan sama sekali dengan romansa—telah memperingatkannya untuk tidak jatuh cinta dan menjadikan pria itu pelarian, Kessa kehilangan kendali atas perasaannya sendiri.
                
                Sanggupkah dia patah hati untuk yang kedua kali?',
                'image' => ''
            ],
            [
                'publisher_id' => 3,
                'title' => 'Dasar - Dasar Ilmu Hukum',
                'author' => 'SAUT P. PANJAITAN',
                'year' => '-',
                'synopsis' =>'Kebutuhan akan tersedianya buku pengantar ilmu hukum sebagai buku teks dan bahan bacaan bagi mahasiswa program S1, S2, dan S3 bidang hukum dan mahasiswa program studi lainnya, para akademisi, dan praktisi hukum kiranya perlu diadakan secara berkesinambungan. Akan tetapi, menyajikan sebuah buku pengantar yang relatif lengkap, dilihat dari aspek materi yang dikemukakan dalam buku yang bersangkutan, dirasakan cukup sulit dilakukan karena begitu luasnya ruang lingkup yang tercakup di dalam ilmu hukum itu sendiri, yang serba pokok (asasnya), serba dasar (kerangkanya), dan serba umum (pengertiannya).

                Buku Seri Kuliah Ringkas: Dasar-Dasar Ilmu Hukum ini hadir dengan menyajikan aspek teoretis mapun praktik peraturan perundang-undangan di Indonesia, mulai dari pengertian, asas, kerangka, hingga penerapannya. Diharapkan kehadiran buku ini dapat menjadi alat bantu untuk memahami ilmu hokum dan hukum itu sendiri.',
                'image' => ''
            ],
            [
                'publisher_id' => 4,
                'title' => 'Penance',
                'author' => 'Minato Kanae',
                'year' => '2020',
                'synopsis' =>'Lima belas tahun lalu, seorang gadis kecil bernama Emily dibunuh di sebuah desa yang tenang. Empat anak perempuan yang waktu itu sedang bermain bersama Emily tidak bisa memberikan kesaksian yang berarti padahal mereka berjumpa dengan laki-laki pembunuhnya. Akibatnya, penyelidikan pun mandek. Ibu almarhumah Emily tidak terima, memanggil keempat anak tersebut, kemudian mengancam mereka, â€œTemukan pelakunya sebelum kasusnya kedaluwarsa, atau ganti rugi dengan cara yang bisa kuterima. Jika tidak, aku akan membalas dendam kepada kalian.â€
                Ketika keempat anak yang menanggung beban besar di pundakmereka itu tumbuh dewasa, tragedi demi tragedy pun terjadi secara beruntun....',
                'image' => ''
            ],
            [
                'publisher_id' => 4,
                'title' => 'Ill Go To You When The Weather is Nice',
                'author' => 'Lee Do Woo',
                'year' => '2020',
                'synopsis' =>'Haewon kembali ke kampung halamannya pada suatu musim dingin. Gadis itu terkejut melihat sebuah rumah tua di desa tersebut sekarang berubah menjadi sebuah toko buku independen baru bernama Good Night. Ternyata, pemiliknya adalah Eunseob, teman sekolahnya.

                Berawal dari toko buku itu, Haewon menjalin hubungan baru dengan orang-orang di kota itu, termasuk dengan Eunseob. Ada banyak hal yang terjadi, bahkan sebuah rahasia yang selama ini tersimpan rapat akhirnya terbongkar. Akankah desa itu membuat Haewon tetap tinggal? Dan bagaimana hubungan Haewon dan Eunsoeb akan berakhir?',
                'image' => ''
            ],
        ];

        foreach($book AS $count){
            books::create([
                'publisher_id' => $count['publisher_id'],
                'title' => $count['title'],
                'author' => $count['author'],
                'year' => $count['year'],
                'synopsis' => $count['sypnopsis'],
                'image' => $count['image'],
            ]);
        }  
    }
}
