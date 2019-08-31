<?php
namespace App\Repositories\Cas;
use App\Repositories\Cas\CasContract;
use App\Cas;
class EloquentCasRepository implements CasContract {
  //create a Cas Item.
  
  public function create($request) {
    $cas = new Cas;
    $cas->cas_title = $request->cas_title;    
    $cas->description = $request->description;    
    $str = strtolower($request->cas_title);
    $cas->slug = preg_replace('/\s+/', '-', $str);
    $cas->save()      ;
    return $cas;
  }

  // return all Menus
  public function findAll() {
    return Cas::all();
  }

  // return a Cas Item by ID
  public function findById($id) {
    return Cas::where('id', $id)->first();
  }

  // return a Cas Item by slug
  public function findBySlug($slug){
    return Cas::where('slug', $slug)->first();
  }

  // Update a Cas Item
  public function update($request, $id) {
    $cas = $this->findById($id);    
    $cas->cas_title = $request->cas_title;    
    $cas->description = $request->description;    
    $str = strtolower($request->cas_title);

    $cas->slug = preg_replace('/\s+/', '-', $str);
    $cas->save();
    return $cas;
  }

  // Remove a Cas Item
  public function remove($slug) {
    $cas = $this->findBySlug($slug);
    return $cas->delete();
  }

  public function trash() {
    return Cas::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return Cas::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $cas = $this->findInTrash($slug);
    return $cas->forceDelete();
  }
}
