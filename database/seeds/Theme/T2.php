<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Models\Backend\Main\Theme;
use App\Models\Backend\Main\Section;

class T2 extends Seeder {

  public function run() {

    $theme = [
      [
        'name'          => 'Bizland',
        'active'        => '1',
        'created_at'    => Carbon::now(),
      ],
    ];

    Theme::insert($theme);

    $section = [
      [ 'id_theme' => '2', 'name' => 'About', 'url' => 'about', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Client', 'url' => 'client', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Contact Us ', 'url' => 'contact-us', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Count', 'url' => 'count', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'General', 'url' => 'general', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Pricing', 'url' => 'pricing', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Service', 'url' => 'service', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Team', 'url' => 'team', 'created_at' => Carbon::now(), ],
      [ 'id_theme' => '2', 'name' => 'Testimonial', 'url' => 'testimonial', 'created_at' => Carbon::now(), ],
    ];

    Section::insert($section);

  }
}
