<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Role\RoleContract;
class RoleController extends Controller
{
	protected $repo;
	public function __construct(RoleContract $roleContract) {
		$this->repo = $roleContract;
	}
	
	public function index() {
		$roles = $this->repo->findAll();
		return view('role.index')->with('roles', $roles);
	}
	
	public function create() {
		return view('role.create');
	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
		]);

		// dd($request->all());

		$role = $this->repo->create($request);

		$notification = array(
			'message' => 'Role $role->name created successfully',
			'alert-type' => 'success'
		);

		if($role->id) {
			return redirect()->back()->with($notification);
		}
	}
	
	public function show($slug) {
		$role = $this->repo->findBySlug($slug);
		return view('role.show')->with('role', $role);
	}
	
	public function edit($slug) {
		$role = $this->repo->findBySlug($slug);
		return view('role.edit')->with('role', $role);
	}
	
	public function update(Request $request, $slug) {
		// dd($request->all());
		$role = $this->repo->update($request, $slug);
		$notification = array(
			'message' => 'Role $role->name updated successfully',
			'alert-type' => 'success'
		);

		if($role->id) {
			return redirect()->route('role.index')->with($notification);
		}

	}
	
	public function delete($slug) {
		//
	}
}
