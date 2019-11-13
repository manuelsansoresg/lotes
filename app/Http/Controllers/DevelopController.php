<?php

namespace App\Http\Controllers;

use App\Develop;
use App\Http\Requests\DevelopRequest;
use Illuminate\Http\Request;

class DevelopController extends Controller
{

    protected $path_document;
    
    public function __construct()
    {
        $this->path_document = './documents';
        
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $develops = Develop::all();

        return view('admin.desarrollo.index', compact('develops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.desarrollo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevelopRequest $request)
    {
        $develop = Develop::create($request, $this->path_document);
        flash('Elemento guardado');
        return redirect('admin/desarrollo/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function show(Develop $develop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $develop = Develop::find($id);
        $path = $this->path_document;
        return view('admin.desarrollo.edit', compact('develop', 'path'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function update(DevelopRequest $request, $id)
    {
        $develop = Develop::create($request, $this->path_document, $id);
        flash('Elemento guardado');
        return redirect('admin/desarrollo/');
    }

    public function destroy_document($develop_id)
    {
        $develop = Develop::find($develop_id);
        @unlink($this->path_document.'/'.$develop->document);
        $develop->document = '';
        $develop->update();
        return redirect('admin/desarrollo/'. $develop_id.'/edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Develop  $develop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Develop $develop)
    {
        //
    }
}
