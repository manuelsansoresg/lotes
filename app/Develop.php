<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Develop extends Model
{
    protected $fillable = ['name', 'title', 'ubication', 'description'];

    static function create($request, $path, $id=null)
    {
        if($id == null){
            $develop = new Develop($request->except('document', '_token')); 
        }else{
            $develop = Develop::find($id);
            $develop->fill($request->except('document', '_token'));
        }


        $document  = $request->file('document');

        if ($request->hasFile('document') != false) {

            $name_document = 'document-' . time() . '.' . $document->getClientOriginalExtension();
            $document->move($path, $name_document);
            $develop->document = $name_document;

        }

        if ($id == null) {
            $develop->save();
        }else{
            $develop->update();
        }
    }
}
