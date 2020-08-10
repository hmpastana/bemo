<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomePage extends Model
{
    public function insert($request)
    {

        if ($request->hasFile('banner_image')) {
            $file = Storage::disk('local')->putFileAs('public', $request->file('banner_image'), 'banner-name.jpeg');
            $filename = Storage::url($file);
        }else{
            $filename = '/storage/banner-name.jpeg';
        }

        $insert = new $this;
        $insert->meta_title = $request->meta_title;
        $insert->meta_description = $request->meta_description;
        $insert->banner_image = $filename;
        $insert->banner_title = $request->banner_title;
        $insert->body_text = $request->body_text;
        $insert->save();

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


    public function edit($request)
    {
        if ($request->hasFile('banner_image')) {
            $file = Storage::disk('local')->put('public', $request->file('banner_image'));
            $filename = Storage::url($file);
        }else{
            $filename = '/files/cda-interview-guide.jpg';
        }

        $edit = self::where('id', '=', $request->id)
        ->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'banner_image' => $filename,
            'banner_title' => $request->banner_title,
            'body_text' => $request->body_text
        ]);

        return $edit;
    }

    public function deleteRegister($register_id)
    {
        $delete = self::where('id', $register_id)
            ->delete();

        return $delete;
    }

}
