<?php
namespace App\Repositories\Leadership;
use App\Repositories\Leadership\LeadershipContract;
use App\Leadership;

class EloquentLeadershipRepository implements LeadershipContract {
  
  public function create($request){
    $leadership = new Leadership;
    $leadership->name= $request->name;
    $leadership->rank= $request->rank;

    $leadership->profile_image = $request->profile_image;    
    $leadership->bio = $request->bio;   
    $leadership->cas_id = $request->cas_id;   
    $str = strtolower($request->name);
    $leadership->slug = preg_replace('/\s+/', '-', $str);
    return $leadership;
  }
     
  public function findAll() {
    $leadership = Leadership::all();
    return $leadership;    
  }
    
  public function findById($id) {
    $leadership = Leadership::whereId($id)->first();
    return $leadership;
  }
  
  public function findBySlug($slug){
    $leadership = Leadership::where('slug', $slug)->first();
    return $leadership;
  }    
      
  public function update($request, $slug) {
    $leadership= $this->findBySlug($slug);
    $leadership->name= $request->name;
    $leadership->profile_image = $request->profile_image;    
    $leadership->bio = $request->bio;   
    $leadership->cas_id = $request->cas_id;   
    $str = strtolower($request->name);
    $leadership->slug = preg_replace('/\s+/', '-', $str);
    return $leadership;
  }

  public function remove($slug) {
    $leadership = $this->findBySlug($slug);
    return $leadership->delete();
  }
}
