<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    $this->call(RolesTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(SettingsTableSeeder::class);
    $this->call(MenusTableSeeder::class);
    $this->call(VisionsTableSeeder::class);
    $this->call(MissionsTableSeeder::class);
  }
}
