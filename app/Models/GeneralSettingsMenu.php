<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSettingsMenu extends Model
{
    public function list()
    {
        $list = self::select()->orderBy('menu_name', 'desc')->get();

        return $list;
    }

    public function edit($menu_id, $menu_name)
    {
        $edit = self::where('id', '=', $menu_id)
        ->update([
            'menu_name' => $menu_name,
        ]);

        return $edit;
    }
}
