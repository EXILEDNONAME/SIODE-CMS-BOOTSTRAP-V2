<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;

class T1 extends Seeder {

  public function run() {

    $theme = [
      [
        'id'            => '1',
        'name'          => 'Other',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

    $section = [
      [ 'id_theme' => 1, 'sort' => 1, 'active' => 1, 'name' => 'Count', 'url' => 'count', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 2, 'active' => 1, 'name' => 'About', 'url' => 'about', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 3, 'active' => 1, 'name' => 'Client', 'url' => 'client', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 4, 'active' => 1, 'name' => 'Testimonial', 'url' => 'testimonial', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 5, 'active' => 1, 'name' => 'Contact Us ', 'url' => 'contact-us', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 6, 'active' => 2, 'name' => 'Pricing', 'url' => 'pricing', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 7, 'active' => 2, 'name' => 'Service', 'url' => 'service', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => 1, 'sort' => 8, 'active' => 2, 'name' => 'Team', 'url' => 'team', 'created_at' => Carbon::now(), ],
    ];

    Section::insert($section);

  }
}
