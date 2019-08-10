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
				// dd($authUser->subscriptions());
				
				try {
				  if (Sentinel::getUser()->roles()->first()->slug === 'admin') {
						// return redirect()->route('admin.index');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'partner') {

						if($authUser->bio_status === 0) {
						  return redirect()->route('dashboard.edit', $authUser->slug);
						  return "Update Account";
						} elseif ($authUser->bio_status === 1) {
						  return redirect()->route('dashboard.index',$authUser->slug);
						}
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'member') {
					
						if($authUser->plan_status === 0) {
						  return redirect()->route('plans.index');
						  // return "Member dash needs update";
						} elseif ($authUser->bio_status === 0) {
						  return redirect()->route('dashboard.index', $authUser->id);
						} elseif ($authUser->bio_status === 1) {
						  // return redirect()->route('user_dash');
						  return "Member dash";
						}
				  }
				} catch (\BadMethodCallException $e) {
				  return redirect()->route('get_login')->with('error', 'Your Session has expired. Please login again!');
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
