<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Vision\VisionContract;
use Sentinel;

class VisionController extends Controller {
	protected $repo;
	public function __construct(VisionContract $visionContract) {
		$this->repo = $visionContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$vision = $this->repo->findById(1);
			return view('vision.index')->with('vision', $vision);
		}
	}
	
	public function create()
	{
		//
	}
	
	public function store(Request $request)
	{
		//
	}
	
	public function show($id)
	{
		//
	}
	
	public function edit($id)
	{
		//
	}
	
	public function update(Request $request, $id) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			try {
				$vision = $this->repo->update($request, $id);

				$notification = array(
					'message' => "Vision Updated successfully",
					'alert-type' => 'success'
				);      

				if($vision->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not Update Mission Statement. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "Unknown error occured",
					'alert-type' => 'error'
				);
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}
	}
	
	public function delete($id) {
		//
	}
}
