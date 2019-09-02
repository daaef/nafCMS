<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Gallery\GalleryContract;
use Illuminate\Database\QueryException;
use Intervention\Image\Facades\Image;
use Sentinel;

class GalleryController extends Controller {
	protected $repo;
	public function __construct(GalleryContract $galleryContract) {
		$this->repo = $galleryContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$galleries = $this->repo->findAll();
			return view('gallery.index')->with('galleries', $galleries);
		}
		
	}
	
	public function create(){
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			return view('gallery.create');
		}
	   
	}
	
		public function store(Request $request) {
			if(!Sentinel::check()){
				return redirect()->route('auth.get.get');
			}
			else{
				
				$this->validate($request, [
					'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
					'title' => 'required',
					'description' => 'required',
				   
				]);
			   
				// if($request->has('image')) { 
				// 	$file = $request->file('image');
				// 	$extension = $file->getClientOriginalExtension();
				// 	$filename =time().'.'.$extension;
				// 	$file->move('uploads/gallery/', $filename);
				// 	Image::make('uploads/gallery/'. $filename)
				// 	->resize(150, 150)->save('uploads/gallery/thumbnails/'. $filename, 50);
				// }

				if ($request->has('image')) {
		      $originalImage= $request->file('image');
		      $thumbnailImage = Image::make($originalImage);
		      $thumbnailPath = public_path('uploads/gallery/thumbnails/');
		      $originalPath = public_path('uploads/gallery/');
		      $watermark = public_path('uploads/news/watermark/logo.png');
		      // dd($originalPath);

		      $filename = time().$originalImage->getClientOriginalName();
		      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
		      $thumbnailImage->insert($watermark, 'bottom-right', 10, 10);
		      $thumbnailImage->save($originalPath.$filename);
		      $thumbnailImage->resize(150,150);

		      // $thumbnail = time().$originalImage->getClientOriginalName();
		      $thumbnailImage->save($thumbnailPath.$filename); 

		      // $news->image = $filename;
		    }
	  
				try {
					$gallery = $this->repo->create($request);
					$gallery['image'] = $filename;
					$gallery->save();
					
					$notification = array(
						'message' => "Image $gallery->title added successfully",
						'alert-type' => 'success'
					);		
		
					if($gallery->id) {
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
			$gallery = $this->repo->findBySlug($slug);
			return view('gallery.show')->with('gallery', $gallery);
		}
		
	}
	
	public function edit($slug)
	{
		if(!Sentinel::check()){
			return redirect()->route('auth.get.get');
		}
		else{
			$gallery = $this->repo->findBySlug($slug);
			return view('gallery.edit')->with('gallery', $gallery);
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
				$file->move('uploads/gallery/', $filename);
				Image::make('uploads/gallery/'. $filename)
				->resize(150, 150)->save('uploads/gallery/thumbnails/'. $filename, 50);
			}
  
			try {
				$gallery = $this->repo->update($request, $slug);
				$gallery['image'] = $filename;
				$gallery->save();
				$notification = array(
					'message' => "Image $gallery->title added successfully",
					'alert-type' => 'success'
				);		
	
				if($gallery->id) {
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
