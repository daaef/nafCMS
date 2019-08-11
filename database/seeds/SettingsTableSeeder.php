<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'site_logo' => Str::random(2),
            'site_title' => Str::random(10),
            'site_description' => Str::random(10),
            'footer_copywrite' => Str::random(10),
            'footer_facebook' => Str::random(10),
            'footer_twitter' => Str::random(10),
            'footer_instagram' => Str::random(10),
        ]);
    }
}
