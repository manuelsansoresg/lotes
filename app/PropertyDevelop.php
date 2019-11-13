<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyDevelop extends Model
{
    protected $table = 'property_develop';
    protected $fillable = ['develop_id', 'description'];
    

    static function getAll($property_id)
    {
        $property = PropertyDevelop::where('develop_id', $property_id)->get();
        return $property;
    }

    static function create($request, $property_develop = null)
    {
        if($property_develop == null){
            $property = new PropertyDevelop($request->except('_token'));
            $property->save();
        }else{
            $property = PropertyDevelop::find($property_develop);
            $property->fill($request->except('_token'));
            $property->update();
        }

        return $property;

    }

}
