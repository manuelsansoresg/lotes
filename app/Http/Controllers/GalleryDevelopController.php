<?php

namespace App\Http\Controllers;

use App\GalleryDevelop;
use App\Http\Requests\GalleryRequest;
use App\PropertyDevelop;
use Illuminate\Http\Request;

class GalleryDevelopController extends Controller
{
    protected $path;
    
    public function __construct()
    {
        $this->path = './desarrollo_imagenes';
        
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($develop_id)
    {
        $develop_id = $develop_id;
        return view('admin.galeria.create', compact('develop_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        GalleryDevelop::create($request, $this->path);
        flash('Elemento guardado');
        return redirect('admin/galeria_propiedad/' . $request->develop_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryDevelop  $galleryDevelop
     * @return \Illuminate\Http\Response
     */
    public function show($develop_id)
    {
        $develop_id       = $develop_id;
        $gallery_develops = GalleryDevelop::all();

        return view('admin.galeria.index', compact('develop_id', 'gallery_develops'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryDevelop  $galleryDevelop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property_develop = GalleryDevelop::find($id);
        $develop_id       = $property_develop->develop_id;

        return view('admin.galeria.edit', compact('develop_id', 'property_develop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryDevelop  $galleryDevelop
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        GalleryDevelop::create($request, $this->path, $id);
        flash('Elemento guardado');
        return redirect('admin/galeria_propiedad/' . $request->develop_id);
    }

    public function destroy_document($id)
    {
        $gallery_develop = GalleryDevelop::find($id);
        $develop_id      = $gallery_develop->develop_id;

        @unlink($this->path.'/' . $gallery_develop->name);
        @unlink($this->path. '/thumb_' . $gallery_develop->name);
        
        $gallery_develop->name = '';
        $gallery_develop->update();
        
        return redirect('admin/galeria_propiedad/' . $develop_id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryDevelop  $galleryDevelop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery_develop = GalleryDevelop::find($id);
        $develop_id      = $gallery_develop->develop_id;
        
        if($gallery_develop->name != ''){
            @unlink($this->path . '/' . $gallery_develop->name);
            @unlink($this->path . '/thumb_' . $gallery_develop->name);
        }
        
        $gallery_develop->delete();

        return redirect('admin/galeria_propiedad/' . $develop_id);
    }
}
