<?php
namespace App\Repositories\Vision;
use App\Repositories\Vision\VisionContract;
use App\Vision;

class EloquentVisionRepository implements VisionContract {
  
  //create a Vision Item.  
  public function create($request) {
    $vision = new Vision;
    $vision->vision = $request->vision;
    $vision->save();
    return $vision;
  }

  // return all Menus
  public function findAll() {
    return Vision::all();
  }

  // return a Vision Item by ID
  public function findById($id) {
    return Vision::where('id', 1)->first();
  }

  // return a Vision by slug
  public function findBySlug($slug){
    return Vision::where('slug', $slug)->first();
  }

  // Update a Vision
  public function update($request, $id) {
    $vision = $this->findById($id);
    $vision->vision = $request->vision;
    $vision->save();
    return $vision;
  }

  // Remove a Vision
  public function remove($slug) {
    $pageType = $this->findBySlug($slug);
    return $pageType->delete();
  }

  public function trash() {
    return Vision::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return Vision::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $pageType = $this->findInTrash($slug);
    return $pageType->forceDelete();
  }
}
