<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;

class T1 extends Seeder {

  public function run() {

    $theme = [
      [
        'name'          => 'Other',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

  }
}
