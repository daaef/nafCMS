<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Leadership\LeadershipContract;
use App\Repositories\Cas\CasContract;
// use Illuminate\Database\QueryException;
use Intervention\Image\Facades\Image;
use Sentinel;

class LeadershipController extends Controller {
	
	protected $repo;
	protected $casRepo;

	public function __construct(LeadershipContract $leadershipContract, CasContract $casContract) {
		$this->repo = $leadershipContract;
		$this->casRepo = $casContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    }
    else{
      $leaders = $this->repo->findAll();
      $cases = $this->casRepo->findAll();
      return view('leadership.index')->with('leaders', $leaders)->with('cases', $cases);
    }
	}
	
	public function create() {
		if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    }
    else{
      return view('leadership.create');
    }
	}
	
	public function store(Request $request) {
		// dd($request->all());
		if(!Sentinel::check()){
      return redirect()->route('auth.login.get');
    }
    else{
    	$this->validate($request, [
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'name' => 'required',
        'rank' => 'required',
        'bio' => 'required',         
      ]);

      if($request->has('profile_image')) { 
        $file = $request->file('profile_image');
        $extension = $file->getClientOriginalExtension();
        $filename =time().'.'.$extension;
        $file->move('uploads/leadership/', $filename);
        Image::make('uploads/leadership/'. $filename)
        ->resize(215, 270)->save('uploads/leadership/'. $filename, 50);
      }

      try {
        $leaders = $this->repo->create($request);
        $leaders['profile_image'] = $filename;
        // dd($leaders);
        $leaders->save();
        $notification = array(
          'message' => "Profile for $leaders->name added successfully",
          'alert-type' => 'success'
        );		

        if($leaders->id) {
          return redirect()->back()->with($notification);
        } else {
          return back()->withInput()->with('error', 'Could not create Profile. Try again!');
        }
      } catch (QueryException $e) {
          
        $error = array(
          'message' => "Profile $request->name already exists!",
          'alert-type' => 'error'
        );

        $errorCode = $e->errorInfo[1];
        if($errorCode == 1062){
          return redirect()->back()->withInput()->with($error);
        }
      }
    }
	}
	
	public function show($id)
	{
		//
	}
	
	public function edit($id)
	{
		//
	}
	
	public function update(Request $request, $id)
	{
		//
	}
	
	public function delete($id)
	{
		//
	}
}
