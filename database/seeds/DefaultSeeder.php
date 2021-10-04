<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {

    // MAIN
    $this->call(T1::class);
    $this->call(T2::class);
    $this->call(T3::class);

    // Default
    $this->call(Roles::class);
    $this->call(Users::class);

  }
}
