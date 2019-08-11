<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $superAdminCredentials = [
      'first_name' => 'Super',
      'last_name' => 'Admin',
      'phone' => '1234567890',
      'email' => 'superadmin@airforce.ng',
      'username' => 'superadmin',
      'password' => 'secret',
      'slug' => 'super-admin',
    ];
    
    $superAdmin = Sentinel::registerAndActivate($superAdminCredentials, true);
    $role = Sentinel::findRoleBySlug('superadmin');
    $role->users()->attach($superAdmin);
    
    $adminCredentials = [
      'first_name' => 'Admin',
      'last_name' => 'Admin',
      'phone' => '1234567890',
      'email' => 'admin@airforce.ng',
      'username' => 'admin',
      'password' => 'secret',
      'slug' => 'admin'      
    ];
  
    $admin = Sentinel::registerAndActivate($adminCredentials, true);
    $role = Sentinel::findRoleBySlug('admin');
    $role->users()->attach($admin);
    
    $userCredentials = [
      'first_name' => 'Nani',
      'last_name' => 'Author',
      'phone' => '1234567890',
      'email' => 'user@airforce.ng',
      'username' => 'author',
      'password' => 'secret',
      'slug' => 'nani-user',
    ];
    
    $user = Sentinel::registerAndActivate($userCredentials, true);
    $role = Sentinel::findRoleBySlug('author');
    $role->users()->attach($user);

    $userCredentials = [
      'first_name' => 'Nani',
      'last_name' => 'Moderator',
      'phone' => '1234567890',
      'email' => 'partner@airforce.ng',
      'username' => 'moderator',
      'password' => 'secret',
      'slug' => 'moderator',
    ];
    
    $user = Sentinel::registerAndActivate($userCredentials, true);
    $role = Sentinel::findRoleBySlug('moderator');
    $role->users()->attach($user);
  }
}
