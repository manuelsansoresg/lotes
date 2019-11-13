<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class GalleryDevelop extends Model
{
    protected $table    = 'gallery_develop';
    protected $fillable = ['develop_id', 'name', 'code', 'type'];

    static function create($request, $path, $id=null)
    {
        if($id == null){
            $gallery_develop = new GalleryDevelop($request->except('_token', 'gallery'));
        }else{
            $gallery_develop = GalleryDevelop::find($id);
        }

        if ($request->hasFile('gallery') != false) { //image is not empty portada
            $file                  = uploadImage($request, 'gallery', $path, 'gallery');
            $gallery_develop->name = $file;
        }
        
        if ($id == null) {
            $gallery_develop->save();
        }else{
            $gallery_develop->update();
        }

    }
}
