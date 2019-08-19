<?php

use Illuminate\Database\Seeder;

class SubmenusTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('submenus')->insert([
      'name' => 'History',
      'slug' => 'history',
      'page_score' => 1,
      'menu_id' => 2,
    ]);

    DB::table('submenus')->insert([
      'name' => 'Careers',
      'slug' => 'careers',
      'page_score' => 2,
      'menu_id' => 2,
    ]);
  }
}
