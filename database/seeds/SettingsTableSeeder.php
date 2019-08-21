<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('settings')->insert([
			'site_logo' => 'logo.png',
			'site_title' => "Nigerian Air Force",
			'site_description' => "Nigerian Air Force Official website",
			'footer_copywrite' => "Copyright ".date('Y')."Nigerian Air Force",
			'footer_facebook' => "https:facebool.com",
			'footer_twitter' => "https://twitter.com",
			'footer_instagram' => "https://instgram.com",
		]);
	}
}
