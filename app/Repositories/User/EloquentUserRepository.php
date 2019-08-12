<?php
namespace App\Repositories\User;
use App\Repositories\User\UserContract;
use App\User;
use Sentinel;

class EloquentUserRepository implements UserContract {
  //create a User.
  
  public function create($request) {

    $name_slug = preg_replace('/\s+/', '-', $request->first_name. ' '. $request->last_name);
    $name = explode(" ", $request->full_name);
      
    $credentials = [
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'phone' => $request->phone,
      'email'    => $request->email,
      'username'    => $request->username,
      'password' => $request->password ?: 'secret',
      'user_role' => $request->user_role,
      'slug' => strtolower($name_slug),
    ];

    // dd($credentials);

    $userRole = $request->user_role;

    $user = Sentinel::registerAndActivate($credentials);
    // dd($user);
    // $activation = Activation::create($user);
    $role = Sentinel::findRoleBySlug($userRole);
    $role->users()->attach($user);

    // $this->sendEmail($user, $activation->code);
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

  // return all Roles
  public function findAll() {
    $users = User::all();
    return $users;
  }

  // return a User by ID
  public function findById($id) {
    return User::where('id', $id)->first();
  }

  // return a User by slug
  public function findBySlug($slug){
    return User::where('slug', $slug)->first();
  }

  // Update a User
  public function update($request, $slug) {
    $user = $this->findBySlug($slug);
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->username = $request->username;
    $user->password = $request->password;
    $user->user_role = $request->user_role;
    
    $str = preg_replace('/\s+/', '-', $request->first_name.' '.$request->last_name);
    $user->slug = strtolower($str);
    $user->save();
    return $user;
  }

  // Remove a User
  public function remove($id) {
    $user = $this->findById($id);
    return $user->delete();
  }
}
