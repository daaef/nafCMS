<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Mission\MissionContract;
use App\Mission;
use App\Vision;

class MissionController extends Controller {
	protected $repo;
	public function __construct(MissionContract $missionContract) {
		$this->repo = $missionContract;
	}
	
	public function index() {
		// $mission = $this->repo->findById(1);
		$mission = Mission::where('id', 1)->first();
		$vision = Vision::where('id', 1)->first();
		return view('mission.index')->with('mission', $mission)->with('vision', $vision);
	}
	
	public function create() {
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
		
		try {
			$mission = $this->repo->update($request, $id);

			$notification = array(
				'message' => "Mission Updated successfully",
				'alert-type' => 'success'
			);      

			if($mission->id) {
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
	
	public function delete($id)
	{
		//
	}
}
