<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table('roles')->insert([
      'slug' => 'superadmin',
      'name' => 'Super Admin',
      'description' => 'Super Admin User',
    ]);
    
    DB::table('roles')->insert([
      'slug' => 'admin',
      'name' => 'Admin',
      'description' => 'Admin User',
    ]);
    
    DB::table('roles')->insert([
      'slug' => 'author',
      'name' => 'Author User',
      'description' => 'Author User',
    ]);

    DB::table('roles')->insert([
      'slug' => 'member',
      'name' => 'Member',
      'description' => 'Author User',
    ]);
  }
}
