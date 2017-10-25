<?php
namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function addSlider(){
        return view('admin.slider.add-slider');
    }
    public function saveSliderInfo(Request $request){
        $sliderImage= $request->file('slider_image');
        $imageName = $sliderImage->getClientOriginalName();
        $directory = 'adminAssets/images/slider_image/';
        $imageUrl = $directory.$imageName;
        $sliderImage->move($directory, $imageName);
        $slider = new Slider();
        $slider->slider_image=$imageUrl;
        $slider->publication_status =$request->publication_status;
        $slider->save();
        return redirect('/add-slider')->with('message','slider Image Save Sccessfully');

    }

    public function manageSlider(){
        $sliders= Slider::all();
        return view('admin.slider.manage-slider',[
            'sliders'=>$sliders
        ]);
    }
    public function unpublishedSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 0;
        $sliderById->save();
        return redirect('/manage-slider');
    }
    public function publishedSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->publication_status = 1;
        $sliderById->save();
        return redirect('/manage-slider');
    }
    public function deleteSlider($id){
        $sliderById = Slider::find($id);
        $sliderById->delete();
        return redirect('/manage-slider');
    }
}
