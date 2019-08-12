<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\User\UserContract;
use App\Repositories\Role\RoleContract;
use Sentinel;

class UserController extends Controller {
	protected $repo;
	protected $roleRepo;
	public function __construct(UserContract $userContract, RoleContract $roleContract) {
		$this->repo = $userContract;
		$this->roleRepo = $roleContract;
	}
	
	public function index() {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			$users = $this->repo->findAll();
			$roles = $this->roleRepo->findAll();
			return view('user.index')->with('users', $users)->with('roles', $roles);
		}
	}
	
	public function create()
	{
		//
	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required',
			'user_role' => 'required',
		]);

		try {
			$user = $this->repo->create($request);

			$notification = array(
				'message' => "User $user->first_name $user->last_name created successfully",
				'alert-type' => 'success'
			);		

			if($user->id) {
				return redirect()->back()->with($notification);
			} else {
				return back()->withInput()->with('error', 'Could not create user. Try again!');
			}
		} catch (QueryException $e) {
			
			$error = array(
				'message' => "Account for $request->first_name $request->last_name already exists!",
				'alert-type' => 'error'
			);

			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
				return redirect()->back()->withInput()->with($error);
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
	
	public function update(Request $request, $slug) {
		// dd($request->all());
		$user = $this->repo->update($request, $slug);
		$notification = array(
			'message' => "User $user->first_name $user->last_name updated successfully",
			'alert-type' => 'success'
		);

		if($user->id) {
			return redirect()->route('user.index')->with($notification);
		}

	}
	
	public function delete($id)
	{
		//
	}
}
