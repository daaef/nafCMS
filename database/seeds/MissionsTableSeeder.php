<?php

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('missions')->insert([
      'mission' => 'To ensure the integrity of the airspace by gaining and maintaining control of the air while retaining a credible capacity to fulfill other airpower tasks demanded by national defence and security imperatives.',
    ]);
  }
}
