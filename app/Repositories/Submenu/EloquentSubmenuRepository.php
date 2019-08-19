<?php
namespace App\Repositories\Submenu;
use App\Repositories\Submenu\SubmenuContract;
class EloquentSubmenuRepository implements SubmenuContract {
  //create a SubMenu Item.  
  public function create($request) {
    $menu = new SubMenu;
    $menu->name = $request->name;    
    $str = strtolower($request->name);
    $menu->slug = preg_replace('/\s+/', '-', $str);
    // dd($menu);
    $menu->save();
    return $menu;
  }

  // return all Menus
  public function findAll() {
    return SubMenu::all();
  }

  // return a SubMenu Item by ID
  public function findById($id) {
    return SubMenu::where('id', $id)->first();
  }

  // return a SubMenu Item by slug
  public function findBySlug($slug){
    return SubMenu::where('slug', $slug)->first();
  }

  // Update a SubMenu Item
  public function update($request, $slug) {
    $updateMenu = $this->findBySlug($slug);
    $updateMenu->name = $request->name;    
    $str = strtolower($request->name);

    $updateMenu->slug = preg_replace('/\s+/', '-', $str);
    $updateMenu->save();
    return $updateMenu;
  }

  // Remove a SubMenu Item
  public function remove($slug) {
    $menu = $this->findBySlug($slug);
    return $menu->delete();
  }

  public function trash() {
    return SubMenu::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return SubMenu::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $menu = $this->findInTrash($slug);
    return $menu->forceDelete();
  }
}
