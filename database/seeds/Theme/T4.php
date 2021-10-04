<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;

class T4 extends Seeder {

  public function run() {

    $theme = [
      [
        'name'          => 'Resi',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

    $section = [
      [ 'id_theme' => '4', 'name' => 'About', 'url' => 'about', 'created_at' => Carbon::now(), ],
    ];

    Section::insert($section);

  }
}
