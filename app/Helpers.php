<?php

use Verot\Upload\Upload;

function uploadImage($request, $name, $path, $pre = '', $is_copy = true, $is_corp = false, $width = 150, $height = 150)
{

    $image_cover = $request->file($name);

    $extension = $image_cover->getClientOriginalExtension();
    $name_full = $pre . time() . '.' . $extension;
    $name_thumb =  $pre . time();
    $thumb = new Upload($_FILES[$name]);


    if ($thumb->uploaded) {
        $thumb->file_new_name_body   = $name_thumb;
        $thumb->file_name_body_pre    = 'thumb_';
        $thumb->file_safe_name     =    true;
        $thumb->image_resize         = true;
        if ($is_corp == false) {
            $thumb->image_ratio_crop     = true;
        }
        $thumb->image_x              = $width;
        $thumb->image_y              = $height;
        $thumb->process($path . '/');
    }

    if($is_copy == true){
        $image_cover->move($path, $name_full);
    }


    return  $name_full;
}


function UploadImageSlider($file, $image_cover,  $path, $pre = '', $is_corp = false, $width= 150, $height = 150)
{
    $handle        = new Upload($file);
    $nombre_imagen = $pre.time() . '_' . rand(1, 999);
    
    $extension = $image_cover->getClientOriginalExtension();
    $name_full = $pre . time() . '.' . $extension;
    $name_thumb =  $pre . time();

    if ($handle->uploaded) {

        
        $handle->file_new_name_body = $name_thumb;
        $handle->file_name_body_pre = 'thumb_';
        $handle->file_safe_name     = true;
        $handle->image_resize       = true;
        if($is_corp == false){
            $handle->image_ratio_crop   = true;
        }
        $handle->image_x            = $width;
        $handle->image_y            = $height;
        $handle->process($path . '/');
    }
    return  $name_full;
}