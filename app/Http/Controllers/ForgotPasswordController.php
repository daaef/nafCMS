<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ForgotPassword\ForgotPasswordContract;
use Sentinel;
use Reminder;
use App\User;
use Mail;

class ForgotPasswordController extends Controller {
	protected $repo;
	public function __construct(ForgotPasswordContract $forgotPasswordContract) {
		$this->repo = $forgotPasswordContract;
	}
	
	public function forgotPassword() {
		return view('auth.forgot-password');
	}

	public function postForgotPassword(Request $request){

		// dd($request->email);
		$user = User::whereEmail($request->email)->first();
		// $sentinelUser = Sentinel::findById($user->id);
		// dd($user);
		if (!$user) {
			// dd('exits not');
			return redirect()->back()->with(['success' => 'Password Reset Link has been sent to your email.']);
		} else {
			// dd('exits');
			$reminder = Reminder::exists($user) ?: Reminder::create($user);
			$this->sendEmail($user, $reminder->code);
			return redirect()->back()->with(['success' => 'Password Reset Link has been sent to your email.']);
		}
	}

	public function resetPassword($email, $resetCode) {
		
		$user = User::byEmail($email);
		
		if(!$user)
			abort(404);
		if($reminder = Reminder::exists($user)){
			if($resetCode == $reminder->code){
				return view('auth.reset');
			} else {
				abort(404);
			}
		} else {
			abort(404);
		}

	}

	public function postResetPassword(Request $request, $email, $resetCode) {
		
		$this->validate($request, [
			'password' => 'confirmed|required|min:5',
			'password_confirmation' => 'required|min:5'
		]);

		$user = User::byEmail($email);
		// $sentinelUser = Sentinel::findById($user->id);

		if(!$user)
			abort(404);
		if($reminder = Reminder::exists($user)){
			if($resetCode == $reminder->code){
				Reminder::complete($user, $resetCode, $request->password);
				return redirect()->route('auth.login.get')->with('success', 'Please Login with your New Password');
			} else {
				abort(404);
			}
		} else {
			abort(404);
		}
	}

	private function sendEmail($user, $code) {
		Mail::send('emails.forgot-password', [
			'user' => $user,
			'code' => $code
		], function ($message) use ($user) {
			$message->to($user->email);
			$message->subject("Hello $user->first_name, reset your password");
		});
	}
}
