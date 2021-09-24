<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\System\ConfigurationSectionTeam;

class T2Teams extends Seeder {
  public function run() {
    $data = [
      [
        'name'              => 'Naufal Haidir Ridha 1',
        'social_twitter'    => 'Instagram 1',
        'social_facebook'   => 'Facebook 1',
        'social_instagram'  => 'Instagram 1',
      ],
      [
        'name'              => 'Naufal Haidir Ridha 2',
        'social_twitter'    => 'Instagram 2',
        'social_facebook'   => 'Facebook 2',
        'social_instagram'  => 'Instagram 2',
      ],
      [
        'name'              => 'Naufal Haidir Ridha 3',
        'social_twitter'    => 'Instagram 3',
        'social_facebook'   => 'Facebook 3',
        'social_instagram'  => 'Instagram 3',
      ],
      [
        'name'              => 'Naufal Haidir Ridha 4',
        'social_twitter'    => 'Instagram 4',
        'social_facebook'   => 'Facebook 4',
        'social_instagram'  => 'Instagram 4',
      ],
    ];

    ConfigurationSectionTeam::insert($data);
  }
}
