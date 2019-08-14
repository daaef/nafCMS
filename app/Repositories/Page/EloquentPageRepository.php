<?php
namespace App\Repositories\Page;
use App\Repositories\Page\PageContract;
use App\Page;
class EloquentPageRepository implements PageContract {
  //create a Page Item.  
  public function create($request) {
    $page = new Page;
    $page->name = $request->name;
    $page->description = $request->description;
    $page->page_content = $request->page_content;
    
    $page->banner_text = $request->banner_text;
    $page->banner_description = $request->banner_description;
    $page->published = $request->published;
    // $page->visibility = $request->visibility;
    $page->page_type_id = $request->page_type_id;

    if ($request->has('feature_image')) {
      $image = $request->file('feature_image');
      $filename = time().'_feature_image.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('uploads/pages/');
      $image->move($destinationPath, $filename);  

      $page->feature_image = $filename;
    }

    $str = strtolower($request->name);
    $page->slug = preg_replace('/\s+/', '-', $str);    
    return $page;
  }

  // return all Menus
  public function findAll() {
    return Page::all();
  }

  // return a Page Item by ID
  public function findById($id) {
    return Page::where('id', $id)->first();
  }

  // return a Page Item by slug
  public function findBySlug($slug){
    return Page::where('slug', $slug)->first();
  }

  // Update a Page Item
  public function update($request, $slug) {
    $page = $this->findBySlug($slug);
    $page->title = $request->title;    
    $str = strtolower($request->title);

    $page->slug = preg_replace('/\s+/', '-', $str);
    $page->save();
    return $page;
  }

  // Remove a Page Item
  public function remove($slug) {
    $page = $this->findBySlug($slug);
    return $page->delete();
  }

  public function trash() {
    return Page::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return Page::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $page = $this->findInTrash($slug);
    return $page->forceDelete();
  }
}

