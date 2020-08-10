<?php

use App\Models\GeneralSetting;
use App\Models\GeneralSettingsMenu;

if( !function_exists('mainMenuContent')){
    function mainMenuContent(){
        $menu_content = GeneralSettingsMenu::select()->orderBy('menu_name', 'desc')->get();
        return $menu_content;
    }
}

if( !function_exists('displayGeneralSettings')){
    function displayGeneralSettings(){
        $general_settings = GeneralSetting::select()->orderBy('id', 'desc')->first();
        return $general_settings;
    }
}
