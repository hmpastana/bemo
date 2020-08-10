<?php

use Illuminate\Database\Seeder;
use App\Models\GeneralSettingsMenu;

class GeneralSettingsMenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = GeneralSettingsMenu::create([
            'menu_name' => 'Home',
            'menu_link' => 'home'
        ]);

        $data = GeneralSettingsMenu::create([
            'menu_name' => 'Contact Us',
            'menu_link' => 'contact-us'
        ]);

        $data = GeneralSettingsMenu::create([
            'menu_name' => 'Admin Area',
            'menu_link' => 'admin-home'
        ]);
    }
}
