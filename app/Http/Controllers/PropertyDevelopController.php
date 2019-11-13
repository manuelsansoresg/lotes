<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyDevelopRequest;
use App\PropertyDevelop;
use Illuminate\Http\Request;

class PropertyDevelopController extends Controller
{
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
    public function create($property_id)
    {
        $property_id = $property_id;
        return view('admin.propiedad.create', compact('property_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyDevelopRequest $request)
    {
        $property_develop = PropertyDevelop::create($request);
        flash('Elemento guardado');
        return redirect('admin/propiedad/'.$request->develop_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertyDevelop  $propertyDevelop
     * @return \Illuminate\Http\Response
     */
    public function show($property_id)
    {
        $property_develops = PropertyDevelop::getAll($property_id);
        $property_id       = $property_id;
        return view('admin.propiedad.index', compact('property_develops', 'property_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyDevelop  $propertyDevelop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property_develop = PropertyDevelop::find($id);
        $property_id      = $property_develop->develop_id;

        return view('admin.propiedad.edit', compact('property_id', 'property_develop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertyDevelop  $propertyDevelop
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyDevelopRequest $request, $id)
    {
        $property_develop = PropertyDevelop::create($request, $id);
        flash('Elemento guardado');
        return redirect('admin/propiedad/' . $request->develop_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertyDevelop  $propertyDevelop
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property_develop = PropertyDevelop::find($id);
        $develop_id = $property_develop->develop_id;
        $property_develop->delete();

        return redirect('admin/propiedad/' . $develop_id);

    }
}
