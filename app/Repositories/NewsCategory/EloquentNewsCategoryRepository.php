<?php
namespace App\Repositories\NewsCategory;
use App\Repositories\NewsCategory\NewsCategoryContract;
use App\NewsCategory;

class EloquentMenuRepository implements MenuContract {
  //create a news category.
  
  public function create($request) {
    $newsCategory = new NewsCategory;
    $newsCategory->name = $request->name;  
    $newsCategory->description = $request->description;   
    $str = strtolower($request->name);
    $newsCategory->slug = preg_replace('/\s+/', '-', $str);
    $newsCategory->save()      ;
    return $newsCategory;
  }

  // return all Menus
//   public function findAll() {
//     return Menu::all();
//   }

  // return a Menu Item by ID
//   public function findById($id) {
//     return Menu::where('id', $id)->first();
//   }

  // return a Menu Item by slug
//   public function findBySlug($slug){
//     return Menu::where('slug', $slug)->first();
//   }

  // Update a Menu Item
//   public function update($request, $slug) {
//     $updateMenu = $this->findBySlug($slug);
//     $updateMenu->name = $request->name;    
//     $str = strtolower($request->name);

//     $updateMenu->slug = preg_replace('/\s+/', '-', $str);
//     $updateMenu->save();
//     return $updateMenu;
//   }

  // Remove a Menu Item
//   public function remove($slug) {
//     $menu = $this->findBySlug($slug);
//     return $menu->delete();
//   }

//   public function trash() {
//     return Menu::onlyTrashed()->get();
//   }

//   public function findInTrash($slug) {
//     return Menu::onlyTrashed()->find($slug);
//   }

//   public function parmanentDelete($slug) {
//     $menu = $this->findInTrash($slug);
//     return $menu->forceDelete();
//   }
}
