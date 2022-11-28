<?php

namespace Database\Seeders;

use App\Models\publishers;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = [[
            'name' => 'Penerbit Erlangga',
            'address' => 'Jl. H. Baping Raya No. 100
            Ciracas, Jakarta Timur 13740',
            'phone' => '(021) 871 7006',
            'email' =>'support@erlangga.co.id',
            'image' => ''
        ],
        [
            'name' => 'Penerbit Mizan',
            'address' => 'JJl. Cinambo 136 (Cisaranten Wetan) Bandung 40294',
            'phone' => '(022) 7834310',
            'email' =>' cs@mizan.com',
            'image' => ''
        ],
        [
            'name' => 'Penerbit Erlangga',
            'address' => '11, Jl. Cipinang Baru Utara No.26, RT.11/RW.2, Cipinang, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13240',
            'phone' => '0251-8240628',
            'email' =>'
            marketing@yudhistira-gi.com',
            'image' => '(021) 871 7006'
        ],
        [
            'name' => 'Penerbit Haru',
            'address' => 'Jl. Sulawesi No.17, Nurmanan, Mangkujayan, Ponorogo, Jawa Timur',
            'phone' => ' (0352) 481444',
            'email' =>' penerbitharu@gmail.com',
            'image' => '(021) 871 7006'
        ],
    ];

        foreach($publisher AS $count){
            publishers::create([
                'name' => $count['name'],
                'address' => $count['address'],
                'phone' => $count['phone'],
                'email' => $count['email'],
                'image' => $count['image'],
            ]);
        }
    }
}
