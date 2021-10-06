<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\General;
use App\Models\Backend\Main\SectionAbout;
use App\Models\Backend\Main\SectionClient;

class DummySiode extends Seeder {

  public function run() {

    // GENERAL GLOBAL
    $general = [
      [
        'id'            => '1',
        'name'          => 'Siode UMKM',
        'slogan'        => 'Managed Services & Software Development',
        'address'       => 'Komp. Villa Pasirwangi Blok J.4A Bandung - Jawa Barat',
        'email'         => 'admin@siode.id',
        'phone'         => '+62 812 3460 4746',
        'maps'          => '!1m14!1m8!1m3!1d15843.831207491585!2d107.707857!3d-6.895651!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1a5649c3e7d4c6c!2sSiode%20Klik%20-%20Digital%20Solution!5e0!3m2!1sen!2sus!4v1633490937265!5m2!1sen!2sus',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    General::insert($general);

    // ABOUT
    $about = [
      [
        'id'            => '1',
        'id_theme'      => '2',
        'description'   => '<p>Sebagai perusahaan yang bergerak dibidang penyedia solusi teknologi informasi, CV. SIODE SOLUTION resmi berdiri pada tanggal 20 November 2015 dan berkantor pusat di Bandung. Seiring dengan perkembangan teknologi saat ini, SIODE SOLUTION memiliki fokus pada pengembangan produk dan solusi teknologi informasi untuk beberapa segmentasi, diantaranya :</p>
        <p style="padding-left: 40px;">1. Lembaga Pemerintahan</p>
        <p style="padding-left: 40px;">2. Perusahaan Advertising</p>
        <p style="padding-left: 40px;">3. Penyedia Jasa Transportasi dan Logistik</p>
        <p style="padding-left: 40px;">4. Industri Lifestyle</p>',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    SectionAbout::insert($about);

    // CLIENT
    $client = [
      [
        'id_theme'      => '2',
        'name'          => 'Arco',
        'image'         => '1633492712_client-1-removebg-preview.png',
        'active'        => '1',
        'sort'          => '1',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_theme'      => '2',
        'name'          => 'Jasamarga',
        'image'         => '1633492924_client-2-removebg-preview.png',
        'active'        => '1',
        'sort'          => '2',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_theme'      => '2',
        'name'          => 'Dinas Perhubungan',
        'image'         => '1633493071_client-3-removebg-preview.png',
        'active'        => '1',
        'sort'          => '3',
        'created_at'    => Carbon::now(),
      ],
      [
        'id_theme'      => '2',
        'name'          => 'UIN',
        'image'         => '1633493133_client-6-removebg-preview.png',
        'active'        => '1',
        'sort'          => '4',
        'created_at'    => Carbon::now(),
      ],
    ];

    SectionClient::insert($client);



  }
}
