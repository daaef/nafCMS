<?php

use Illuminate\Database\Seeder;

class VisionsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('visions')->insert([
      'vision' => 'To reposition the NAF into a highly professional and disciplined force through capacity building initiatives for effective, efficient and timely employment of air power in response to Nigeria\'s national security imperatives',
    ]);
  }
}
