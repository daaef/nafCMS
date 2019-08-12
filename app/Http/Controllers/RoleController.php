<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Role\RoleContract;
use Sentinel;

class RoleController extends Controller{
	protected $repo;
	public function __construct(RoleContract $roleContract) {
		$this->repo = $roleContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$roles = $this->repo->findAll();
			return view('role.index')->with('roles', $roles);
		}
		
	}
	
	public function create() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			return view('role.create');
		}
		
	}
	
	public function store(Request $request) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$this->validate($request, [
				'name' => 'required',
			]);
	
			try {
				$role = $this->repo->create($request);
	
				$notification = array(
					'message' => "Role $role->name created successfully",
					'alert-type' => 'success'
				);		
	
				if($role->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not create role. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "Role $request->name already exists!",
					'alert-type' => 'error'
				);
	
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}
		
	}
	
	public function show($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$role = $this->repo->findBySlug($slug);
			return view('role.show')->with('role', $role);
		}
	
	}
	
	public function edit($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$role = $this->repo->findBySlug($slug);
			return view('role.edit')->with('role', $role);
		}
		
	}
	
	public function update(Request $request, $slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			// dd($request->all());
			$role = $this->repo->update($request, $slug);
			$notification = array(
				'message' => "Role $role->name updated successfully",
				'alert-type' => 'success'
			);

			if($role->id) {
				return redirect()->route('role.index')->with($notification);
			}
		}
		

	}
	
	public function delete($slug) {
		//
	}
}
