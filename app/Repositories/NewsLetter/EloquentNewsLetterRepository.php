<?php
namespace App\Repositories\NewsLetter;
use App\Repositories\NewsLetter\NewsLetterContract;
use App\NewsLetter;

class EloquentNewsLetterRepository implements NewsLetterContract {
  //create a NewsLetter Item.  
  public function create($request) {
    $newLetter = new NewsLetter;
    $newLetter->email = $request->email;
    $newLetter->save();
    return $newLetter;
  }

  // return all Menus
  public function findAll() {
    return NewsLetter::all();
  }

  // return a NewsLetter Item by ID
  public function findById($id) {
    return NewsLetter::where('id', 1)->first();
  }

  // return a NewsLetter by slug
  public function findBySlug($slug){
    return NewsLetter::where('slug', $slug)->first();
  }

  // Update a NewsLetter
  public function update($request, $id) {
    $newLetter = $this->findById($id);
    $newLetter->email = $request->email;
    $newLetter->save();
    return $newLetter;
  }

  // Remove a NewsLetter
  public function remove($slug) {
    $newLetter = $this->findBySlug($slug);
    return $newLetter->delete();
  }

  private function sendEmail($users) {
    try {
      foreach ($users as $user) {
        Mail::send('emails.activation', [
          'user' => $user
        ], function($message) use ($user) {
          $message->to($user->email);
          $message->subject("Hello $user->first_name, activate your account.");
        });
      }
    } 
    catch (\Swift_TransportException $e) {
      dd($e);
    }
      
  }
}
