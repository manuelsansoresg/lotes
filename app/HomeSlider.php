<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verot\Upload\Upload;

class HomeSlider extends Model
{
    static function create($request, $path, $id = null)
    {

        if ($request->hasFile('photo') != false) { 
            if($id != null){
                $home_slider = HomeSlider::find($id);
                $image_cover        = $request->file('photo');

                $image_movil = uploadImage($request, 'photo', $path, 'movil', false, true, 414);
                usleep(100000);
                $image = uploadImage($request, 'photo', $path, '');
                $home_slider->photo = $image;
                $home_slider->thumb = 'thumb_' . $image;
                $home_slider->movil = $image_movil;
                $home_slider->update();

                

            }
        }

        if ($request->hasFile('image') != false) { 

            $files = array();
            
            foreach ($_FILES['image'] as $k => $l) {
                foreach ($l as $i => $v) {
                    if (!array_key_exists($i, $files))
                        $files[$i] = array();
                    $files[$i][$k] = $v;
                }
            }

            
            $cont = -1;

            foreach ($files as $file) {
                $home_slider = new HomeSlider();
                
                $cont               = $cont +1 ;
                $image_cover        = $request->file('image')[$cont];
                $image              = UploadImageSlider($file, $image_cover, $path);
                
                $image_movil        = UploadImageSlider($file, $image_cover, $path, 'movil', true, 414);
                $home_slider->photo = $image;
                $home_slider->thumb = 'thumb_'.$image;
                $home_slider->movil = $image_movil;
                $home_slider->save();

                $image_cover->move($path, $image);

               
            }
        }
    }
}
