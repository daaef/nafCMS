<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Slider\SliderContract;
use Intervention\Image\Facades\Image;
use Sentinel;
class SliderController extends Controller
{
    protected $repo;
    public function __construct(SliderContract $sliderContract) {
        $this->repo = $sliderContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        else{
            $sliders = $this->repo->findAll();
            return view('slider.index')->with('sliders', $sliders);
        }
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        else{
            return view('slider.create');
        }
       
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.get');
        }
        else{
            
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'title' => 'required',
                'description' => 'required',
               
            ]);
           
            if($request->has('image')) { 
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('uploads/sliders/', $filename);
                Image::make('uploads/sliders/'. $filename)
                ->resize(150, 150)->save('uploads/sliders/thumbnails/'. $filename, 50);
            }
  
            try {
                $slider = $this->repo->create($request);
                $slider['image'] = $filename;
                $slider->save();
                $notification = array(
                    'message' => "Image $slider->title added successfully",
                    'alert-type' => 'success'
                );		
    
                if($slider->id) {
                    return redirect()->back()->with($notification);
                } else {
                    return back()->withInput()->with('error', 'Could not create image. Try again!');
                }
            } catch (QueryException $e) {
                
                $error = array(
                    'message' => "Role $request->title already exists!",
                    'alert-type' => 'error'
                );
    
                $errorCode = $e->errorInfo[1];
                if($errorCode == 1062){
                    return redirect()->back()->withInput()->with($error);
                }
            }
        }
    }
    
    public function show($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.get');
        }
        else{
            $slider = $this->repo->findBySlug($slug);
		    return view('slider.show')->with('slider', $slider);
        }
    }
    
    public function edit($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.get');
        }
        else{
            $slider = $this->repo->findBySlug($slug);
            return view('slider.edit')->with('slider', $slider);
        }
    }
    
    public function update(Request $request, $slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.get');
        }
        else{
            
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'title' => 'required',
                'description' => 'required',
               
            ]);
           
            if($request->has('image')) { 
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename =time().'.'.$extension;
                $file->move('uploads/sliders/', $filename);
                Image::make('uploads/sliders/'. $filename)
                ->resize(150, 150)->save('uploads/sliders/thumbnails/'. $filename, 50);
            }
  
            try {
                $slider = $this->repo->update($request, $slug);
                $slider['image'] = $filename;
                $slider->save();
                $notification = array(
                    'message' => "Image $slider->title added successfully",
                    'alert-type' => 'success'
                );		
    
                if($slider->id) {
                    return redirect()->back()->with($notification);
                } else {
                    return back()->withInput()->with('error', 'Could not create image. Try again!');
                }
            } catch (QueryException $e) {
                
                $error = array(
                    'message' => "Role $request->title already exists!",
                    'alert-type' => 'error'
                );
    
                $errorCode = $e->errorInfo[1];
                if($errorCode == 1062){
                    return redirect()->back()->withInput()->with($error);
                }
            }
        }
    }
    
    public function delete($slug)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.get.get');
        }
        else{
            if ($this->repo->remove($slug)) {
                $notification = array(
                    'message' => "gallery deleted successfully",
                    'alert-type' => 'success'
                );
            return redirect()->back()->with($notification);
            } else {
                $error = array(
                    'message' => 'Error Deleting gallery',
                    'alert-type' => 'error'
                );
            return back()->with($error);
            }
        }    
    }
    }

