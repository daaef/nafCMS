<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Setting\SettingContract;
use Intervention\Image\Facades\Image;
use App\Setting;
use Sentinel;

class SettingController extends Controller
{
    protected $repo;
    public function __construct(SettingContract $settingContract) {
        $this->repo = $settingContract;
    }
    
    public function index()
    {
				if(!Sentinel::check()){
					return redirect()->route('auth.login.get');
				}
				else{
					$settings = $this->repo->findAll();
					return view('setting.index')->with('settings', $settings);
				}

       
    }
    
    public function create() {
			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
			else{
				   // $settings = $this->repo->findAll();
					 $settings = Setting::findOrFail(1);
					 // dd($settings);
					 return view('setting.create')->with('settings', $settings);
			}
   
    }
    
    public function store(Request $request) {
			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
			else{
				$this->validate($request, [
					'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
					'site_title' => 'required',
					'footer_copywrite' => 'required',
					'footer_facebook' => 'url',
					'footer_twitter' => 'url',
					'footer_instagram' => 'url',
				]);
	
			 
				if ($request->has('site_logo')) {
					$image = $request->file('site_logo');
					$filename = time().'.'.$image->getClientOriginalExtension();
					$destinationPath = public_path('uploads/logos/');
					$image->move($destinationPath, $filename);		   
				}		
	
				try{
					$settings = $this->repo->create($request);
					$settings['site_logo'] =  $filename;
					$settings->save();
					$notification = array(
						'message' => "Menu $menu->name created successfully",
						'alert-type' => 'success'
					);
	
					if($settings->id) {
				
						return redirect()->back()->with($notification);
					} else {
						return back()->withInput()->with('error', 'Could not create store setting. Try again!');
					}
				}
				catch (QueryException $e) {
					$errorCode = $e->errorInfo[1];
					if($errorCode == 1062){
						return back()->withInput()->with('error', 'There was an error');
					}
				}  
			}
          
    }
    
    public function show($id)
    {
			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
			else{
				$setting = $this->repo->findById($id);
        return $setting;
			}
       
    }
    
    public function edit($id)
    {
			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
			else{
				$setting = $this->repo->findById($id);
        return view('setting.edit')->with('setting', $setting);
			}
       
    }
    
    public function update(Request $request, $id)
    {

			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
		
			else{
				
					$this->validate($request, [
						'site_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
						'site_title' => 'required',
						'footer_copywrite' => 'required',
						'footer_facebook' => 'url',
						'footer_twitter' => 'url',
						'footer_instagram' => 'url',
		
			]);
			
		if($request->has('site_logo')) { 
			$file = $request->file('site_logo');
			$extension = $file->getClientOriginalExtension(); // getting image extension
			$filename =time().'.'.$extension;
			$file->move('uploads/logos/', $filename);
			Image::make('uploads/logos/'. $filename)
			->resize(100, 100)->save('uploads/logos/thumbnails/'. $filename, 50);
		}

		try{
			$setting = $this->repo->update($request, $id);
			$setting['site_logo'] =  $filename;
			$setting->save();
			$notification = array(
				'message' => "Settings $setting->title created successfully",
				'alert-type' => 'success'
			);	
			if($setting->id) {
				return redirect()->back()->with($notification);
			} else {
				return back()->withInput()->with('error', 'Could not create setting. Try again!');
			}
		}
		catch (QueryException $e) {
			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
				return back()->withInput()->with('error', 'There was an error');
			}
		}
			}
    }
    
    public function delete($id)
    {
			if(!Sentinel::check()){
				return redirect()->route('auth.login.get');
			}
			else{
				$setting = $this->repo->remove($id);
        $message = "settings deleted successfully";
        return redirect()->back()->with('message', $message);
			}
        
    }

	
	

}
