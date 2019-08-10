<?php
namespace App\Repositories\Register;
use App\Repositories\Register\RegisterContract;
use Sentinel;
use Activation;
use App\User;
use Mail;

class EloquentRegisterRepository implements RegisterContract {
  public function create($request) {
      
    $name_slug = preg_replace('/\s+/', '-', $request->full_name);
    $name = explode(" ", $request->full_name);
      
    $credentials = [
      'first_name' => $name[0],
      'last_name' => $name[1],
      'email'    => $request->email,
      'username'    => $request->username,
      'password' => $request->password,
      'slug' => strtolower($name_slug.rand()),
    ];

    // $user = Sentinel::register($credentials);
    $user = Sentinel::registerAndActivate($credentials);
    $activation = Activation::create($user);
    $role = Sentinel::findRoleBySlug('member');
    $role->users()->attach($user);

    $this->sendEmail($user, $activation->code);
    return $user;
  }

  private function sendEmail($user, $code) {
    try {
      Mail::send('emails.activation', [
          'user' => $user,
          'code' => $code
      ], function($message) use ($user) {
          $message->to($user->email);
          $message->subject("Hello $user->first_name, activate your account.");
      });
    } 
    catch (\Swift_TransportException $e) {
      dd($e);
    }
      
  }
}
