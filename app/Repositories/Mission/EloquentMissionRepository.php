<?php
namespace App\Repositories\Mission;
use App\Repositories\Mission\MissionContract;
use App\Mission;

class EloquentMissionRepository implements MissionContract {
  //create a Mission Item.  
  public function create($request) {
    $mission = new Mission;
    $mission->mission = $request->mission;
    $mission->save();
    return $mission;
  }

  // return all Menus
  public function findAll() {
    return Mission::all();
  }

  // return a Mission Item by ID
  public function findById($id) {
    return Mission::where('id', $id)->first();
  }

  // return a Mission by slug
  public function findBySlug($slug){
    return Mission::where('slug', $slug)->first();
  }

  // Update a Mission
  public function update($request, $id) {
    $mission = $this->findById($id);
    $mission->mission = $request->mission;
    $mission->save();
    return $mission;
  }

  // Remove a Mission
  public function remove($slug) {
    $pageType = $this->findBySlug($slug);
    return $pageType->delete();
  }
}
