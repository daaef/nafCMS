<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Setting\SettingContract;
class SettingController extends Controller
{
    protected $repo;
    public function __construct(SettingContract $settingContract) {
        $this->repo = $settingContract;
    }
    
    public function index()
    {
        $settings = $this->repo->getAll();
        return view('setting.index')->with('settings', $settings);
    }
    
    public function create()
    {
        return view('setting.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'site_logo' => 'required',
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
        }

        try{
            $settings = $this->repo->create($request);
            $settings['site_logo'] =  $filename;
            return $settings;
        }
        catch (QueryException $e) {
			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
				return back()->withInput()->with('error', 'There was an error');
			}
		}
       
    }
    
    public function show($id)
    {
        $setting = $this->repo->find($id);
        return $setting;
    }
    
    public function edit($id)
    {
        
        $setting = $this->repo->edit($id);
        return view('setting.edit')->with('setting', $setting);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'site_logo' => 'required',
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
        }

        try{
            $settings = $this->repo->update($id, $request);
            $settings['site_logo'] =  $filename;
            return $settings;
        }
        catch (QueryException $e) {
			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
                return back()->withInput()->with('error', 'There was an error');
			}
		}
    }
    
    public function delete($id)
    {
        $setting = $this->repo->delete($id);
        $message = "settings deleted successfully";
        return redirect()->back()->with('message', $message);
    }
}
