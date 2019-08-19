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
      'name' => 'Home',
      'slug' => '/',
      'page_score' => 0,
    ]);

    DB::table('menus')->insert([
      'name' => 'About Us',
      'slug' => 'about-us',
      'page_score' => 1,
    ]);

    DB::table('menus')->insert([
      'name' => 'Careers',
      'slug' => 'careers',
      'page_score' => 3,
    ]);

    DB::table('menus')->insert([
      'name' => 'News',
      'slug' => 'news',
      'page_score' => 4,
    ]);

    DB::table('menus')->insert([
      'name' => 'Media',
      'slug' => 'media',
      'page_score' => 5,
    ]);

  }
}
