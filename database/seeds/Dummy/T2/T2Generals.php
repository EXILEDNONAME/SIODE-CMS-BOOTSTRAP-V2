<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\System\ConfigurationGeneral;
use App\Models\Backend\Main\Theme;

class T2Generals extends Seeder {
  public function run() {

    $data = [
      [
        'name'              => 'EXILEDNONAME',
        'slogan'            => 'We are team of talented designers making websites',
        'email'             => 'naufalhaidirridha@rocketmail.com',
        'phone'             => '08112448111',
        'address'           => 'Bandung, West Java',
        'social_twitter'    => 'twitter.com',
        'social_facebook'   => 'facebook.com',
        'social_instagram'  => 'instagram.com',
        'created_at'        => Carbon::now(),
      ],
    ];

    ConfigurationGeneral::insert($data);

  }
}
