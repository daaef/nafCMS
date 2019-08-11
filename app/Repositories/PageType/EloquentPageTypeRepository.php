<?php
namespace App\Repositories\PageType;
use App\Repositories\PageType\PageTypeContract;
use App\PageType;

class EloquentPageTypeRepository implements PageTypeContract {
  //create a PageType Item.  
  public function create($request) {
    $pageType = new PageType;
    $pageType->title = $request->title;    
    $str = strtolower($request->title);
    $pageType->slug = preg_replace('/\s+/', '-', $str);
    $pageType->save();
    return $pageType;
  }

  // return all Menus
  public function findAll() {
    return PageType::all();
  }

  // return a PageType Item by ID
  public function findById($id) {
    return PageType::where('id', $id)->first();
  }

  // return a PageType Item by slug
  public function findBySlug($slug){
    return PageType::where('slug', $slug)->first();
  }

  // Update a PageType Item
  public function update($request, $slug) {
    $updatePageType = $this->findBySlug($slug);
    $updatePageType->title = $request->title;    
    $str = strtolower($request->title);

    $updatePageType->slug = preg_replace('/\s+/', '-', $str);
    $updatePageType->save();
    return $updatePageType;
  }

  // Remove a PageType Item
  public function remove($slug) {
    $pageType = $this->findBySlug($slug);
    return $pageType->delete();
  }

  public function trash() {
    return PageType::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return PageType::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $pageType = $this->findInTrash($slug);
    return $pageType->forceDelete();
  }
}
