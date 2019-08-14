<?php
namespace App\Repositories\Slider;
use App\Repositories\Slider\SliderContract;
use App\Slider;
class EloquentSliderRepository implements SliderContract {
    //
  public function create($request){
    $slider = new Slider;
    $slider->title= $request->title;  
    $slider->description = $request->description;   
    $str = strtolower($request->title);
    $slider->slug = preg_replace('/\s+/', '-', $str);
    return $slider;
  }

  public function findAll() {
    $sliders = Slider::all();
    return $sliders;
  }

  public function findById($id) {
    $slider = Slider::whereId($id)->first();
    return $slider;
  }

 
  public function findBySlug($slug){
    $slider = Slider::where('slug', $slug)->first();
    return $slider;
  }

  
  public function update($request, $slug) {
    $slider = $this->findBySlug($slug);
    $slider->title = $request->title;  
    $slider->description = $request->description;    
    $str = strtolower($request->title);

    $slider->slug = preg_replace('/\s+/', '-', $str);
    return $slider;
  }

  public function remove($slug) {
    $slider = $this->findBySlug($slug);
    return $slider->delete();
  }

}
