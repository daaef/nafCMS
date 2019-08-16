<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('menus')->insert([
      'name' => 'About Us',
      'slug' => 'about-us',
      'page_score' => 0,
    ]);

    DB::table('menus')->insert([
      'name' => 'About Us',
      'slug' => 'about-us',
      'page_score' => 0,
    ]);
  }
}
