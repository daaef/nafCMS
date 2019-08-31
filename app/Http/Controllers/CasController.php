<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Cas\CasContract;
use Sentinel;

class CasController extends Controller {
	protected $repo;
	public function __construct(CasContract $casContract) {
		$this->repo = $casContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$cases = $this->repo->findAll();
			return view('cas.index')->with('cases', $cases);
		}
	}
	
	public function create() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			return view('cas.create');
		}
	}
	
	public function store(Request $request) {

		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$this->validate($request, [
				'cas_title' => 'required',
			]);
	
			try {
				$cas = $this->repo->create($request);
	
				$notification = array(
					'message' => "CAS $cas->cas_title created successfully",
					'alert-type' => 'success'
				);		
	
				if($cas->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not create CAS. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "$request->cas_title already exists!",
					'alert-type' => 'error'
				);
	
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}
	}
	
	public function show($id) {
		//
	}
	
	public function edit($id) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$cas = $this->repo->findBySlug($slug);
			return view('cas.edit')->with('cas', $cas);
		}
	}
	
	public function update(Request $request, $id) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$cas = $this->repo->update($request, $id);
			
			$notification = array(
				'message' => "Menu $cas->cas_title updated successfully",
				'alert-type' => 'success'
			);

			if($cas->id) {
				return redirect()->back()->with($notification);
			}
		}
		
	}
	
	public function delete($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			if ($this->repo->remove($slug)) {
				$notification = array(
					'message' => "Record deleted successfully",
					'alert-type' => 'success'
				);
				return redirect()->back()->with($notification);
			 } else {
				$error = array(
					'message' => 'Error Deleting Record',
					'alert-type' => 'error'
				);
				return back()->with($error);
			}    
		}	
	}
}
