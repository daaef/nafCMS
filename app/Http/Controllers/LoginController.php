<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Login\LoginContract;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;

class LoginController extends Controller {
	
	protected $repo;
	
	public function __construct(LoginContract $loginContract) {
		$this->repo = $loginContract;
	}

	public function getLogin() {
		return view('auth.login');
	}
	
	public function post(Request $request) {
		$this->validate($request, [
		  'login' => 'required',
		  'password' => 'required'
		]);

		$credentials = [
		  'login'    => $request->login,
		  'password' => $request->password,
		];

		// dd($credentials);
				
		try {
		  if(Sentinel::authenticate($credentials)) {
				$authUser = Sentinel::getUser();
				// dd($authUser);
				
				try {
				  if (Sentinel::getUser()->roles()->first()->slug === 'superadmin') {
						
						return "Super Admin dashboard";
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {
				  	return redirect()->route('admin.index');
				  	return "admin dashboard";
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'author') {
						// return redirect()->route('dashboard.edit', $authUser->slug);
						return "author dashboard";
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'moderator') {			
						return "Moderator dash";						
				  }
				} catch (\BadMethodCallException $e) {
				  return redirect()->route('auth.login.get')->with('error', 'Your Session has expired. Please login again!');
				}
	  	} else {			
				return redirect()->back()->withInput()->with('error', 'Ops... Your Login Credentials did not match');
	  	}
		} catch(ThrottlingException $e) {
	  	$delay = $e->getDelay();
	  	return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
		} catch(NotActivatedException $e){
	  	return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
		}
  }

  public function logout() {
		Sentinel::logout(null, true);
		return redirect()->route('home');
  }
}
