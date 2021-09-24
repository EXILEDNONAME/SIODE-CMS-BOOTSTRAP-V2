<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\T2\About;

class T2Abouts extends Seeder {
  public function run() {
    $data = [
      [
        'title'                   => 'EXILEDNONAME',
        'sub_title'               => 'Were Expiring',
        'content_title'           => '',
        'content_description_1'   => '',
        'content_1_title'         => '',
        'content_1_description'   => '',
        'content_2_title'         => '',
        'content_2_description'   => '',
        'content_description_2'   => '',
      ],
    ];

    About::insert($data);
  }
}
