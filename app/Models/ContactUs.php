<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ContactUs extends Model
{
    protected $table = "contact_us";

    public function insert($request)
    {
        // dd( $request->file('image_name'));
        if ($request->hasFile('image_name')) {
            $file = Storage::putFileAs('/public/files', $request->file('image_name'), 'contact-us.jpeg');
            $filename = Storage::url($file);
        }else{
            $filename = '/storage/contact-us.jpeg';
        }

        $insert = new $this;
        $insert->meta_title = $request->meta_title;
        $insert->meta_description = $request->meta_description;
        $insert->contact = $request->contact;
        $insert->name_title = $request->name_title;
        $insert->email_title = $request->email_title;
        $insert->message_title = $request->message_title;
        $insert->button_left = $request->button_left;
        $insert->button_right = $request->button_right;
        $insert->note = $request->note;
        $insert->image_name = $filename;
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
        $file = Storage::disk('local')->put('public', $request->file('image_name'));
        $filename = Storage::url($file);

        $edit = self::where('id', '=', $request->id)
        ->update([
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'contact' => $request->contact,
            'name_title' => $request->name_title,
            'email_title' => $request->email_title,
            'message_title' => $request->message_title,
            'button_left' => $request->button_left,
            'button_right' => $request->button_right,
            'note' => $request->note,
            'image_name' => $request->image_name,
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
