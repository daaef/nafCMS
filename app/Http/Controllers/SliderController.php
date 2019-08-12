<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Slider\SliderContract;
use Illuminate\Database\QueryException;
class SliderController extends Controller
{
    protected $repo;
    public function __construct(SliderContract $sliderContract) {
        $this->repo = $sliderContract;
    }
    
    public function index()
    {
        $sliders = $this->repo->findAll();
        return view('slider.index')->with('sliders', $sliders);
    }
    
    public function create()
    {
        return view('slider.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'slider_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->has('slider_image')) { 
            $file = $request->file('slider_image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename =time().'.'.$extension;
            $file->move('uploads/sliders/', $filename);
          }
  

		try {
            $request;
            $slider = $this->repo->create($request);
            $slider['slider_image'] = $filename;
            $slider->save();
            return $slider;

			$notification = array(
				'message' => "Slider $slider->title created successfully",
				'alert-type' => 'success'
			);		

			if($slider->id) {
				return redirect()->back()->with($notification);
			} else {
				return back()->withInput()->with('error', 'Could not create slider. Try again!');
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
    
    public function show($slug)
    {
        $slider = $this->repo->findBySlug($slug);
		return view('slider.show')->with('slider', $slider);
    }
    
    public function edit($slug)
    {
        $slider = $this->repo->findBySlug($slug);
		return view('slider.edit')->with('slider', $slider);
    }
    
    public function update(Request $request, $slug)
    {
    if($request->has('slider_image')) { 
        $file = $request->file('slider_image');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename =time().'.'.$extension;
        $file->move('uploads/sliders/', $filename);
        }
        $slider = $this->repo->update($request, $slug);
        $slider['slider_image'] = $filename;
        $slider->save();
		$notification = array(
			'message' => "Slider $slider->title updated successfully",
			'alert-type' => 'success'
		);

		if($slider->id) {
			return redirect()->route('slider.index')->with($notification);
		}
    }
    
    public function delete($slug)
    {
        if ($this->repo->remove($slug)) {
			$notification = array(
				'message' => "slider deleted successfully",
				'alert-type' => 'success'
			);
      return redirect()->back()->with($notification);
   	} else {
			$error = array(
				'message' => 'Error Deleting slider',
				'alert-type' => 'error'
			);
      return back()->with($error);
    }    
    }
}
