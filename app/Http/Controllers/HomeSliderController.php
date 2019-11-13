<?php

namespace App\Http\Controllers;

use App\HomeSlider;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    protected $path_slider;
    
    public function __construct()
    {
        $this->path_slider = './sliders';
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_sliders = HomeSlider::all();
        return view('admin.slider_home.index', compact('home_sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider_home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        HomeSlider::create($request, $this->path_slider);
        flash('Elemento guardado');
        return redirect('admin/slider/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(HomeSlider $homeSlider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_slider = HomeSlider::find($id);
        return view('admin.slider_home.edit', compact('home_slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        HomeSlider::create($request, $this->path_slider, $id);
        flash('Elemento guardado');
        return redirect('admin/slider/');
    }

    public function destroy_image($id)
    {
        $home_slider = HomeSlider::find($id);
        @unlink($this->path_slider.'/'.$home_slider->photo);
        @unlink($this->path_slider.'/'.$home_slider->thumb);
        @unlink($this->path_slider. '/thumb_'.$home_slider->movil);

        $home_slider->photo = '';
        $home_slider->thumb = '';
        $home_slider->movil = '';
        $home_slider->update();
        return redirect('admin/slider/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeSlider  $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home_slider = HomeSlider::find($id);
        @unlink($this->path_slider . '/' . $home_slider->photo);
        @unlink($this->path_slider . '/' . $home_slider->thumb);
        @unlink($this->path_slider . '/thumb_' . $home_slider->movil);
        $home_slider->delete();
        return redirect('admin/slider/');
    }
}
