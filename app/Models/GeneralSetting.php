<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\GeneralSettingsMenu;

class GeneralSetting extends Model
{
    public function insert($request)
    {
        if ($request->hasFile('logo_image')) {
            $file = Storage::disk('local')->put('public', $request->file('logo_image'));
            $filename = Storage::url($file);
        }else{
            $filename = '/storage/bemo-logo2.jpeg';
        }

        $insert = new $this;
        $insert->facebook_icon = $request->facebook_icon;
        $insert->facebook_link = $request->facebook_link;
        $insert->twitter_icon = $request->twitter_icon;
        $insert->twitter_link = $request->twitter_link;
        $insert->logo_image = $filename;
        $insert->show_noindex = $request->show_noindex;
        $insert->google_analytics = $request->google_analytics;
        $insert->facebook_pixel = $request->facebook_pixel;
        $insert->save();


        $menu = new GeneralSettingsMenu();
        // dd($request);
        foreach($request->menu_id as $menu_ind => $menu_id){
            $update_menu = $menu->edit($menu_id, $request->menu_name[$menu_ind]);
        }

        if(isset($request->id)){
            $delete = $this->deleteRegister($request->id);
        }

        return $insert;
    }

    public function list()
    {
        $list = self::select()->orderBy('id', 'desc')->first();

        return $list;
    }

    public function deleteRegister($register_id)
    {
        $delete = self::where('id', $register_id)
            ->delete();

        return $delete;
    }
}
