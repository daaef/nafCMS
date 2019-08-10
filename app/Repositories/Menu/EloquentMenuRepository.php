<?php
namespace App\Repositories\Menu;
use App\Repositories\Menu\MenuContract;
use App\Menu;

class EloquentMenuRepository implements MenuContract {
  //create a Menu Item.
  
  public function create($request) {
    $menu = new Menu;
    $menu->name = $request->name;    
    $str = strtolower($request->name);
    $menu->slug = preg_replace('/\s+/', '-', $str);
    $menu->save()      ;
    return $menu;
  }

  // return all Menus
  public function findAll() {
    return Menu::all();
  }

  // return a Menu Item by ID
  public function findById($id) {
    return Menu::where('id', $id)->first();
  }

  // return a Menu Item by slug
  public function findBySlug($slug){
    return Menu::where('slug', $slug)->first();
  }

  // Update a Menu Item
  public function update($request, $slug) {
    $updateMenu = $this->findBySlug($slug);
    $updateMenu->name = $request->name;    
    $str = strtolower($request->name);

    $updateMenu->slug = preg_replace('/\s+/', '-', $str);
    $updateMenu->save();
    return $updateMenu;
  }

  // Remove a Menu Item
  public function remove($slug) {
    $menu = $this->findBySlug($slug);
    return $menu->delete();
  }

  public function trash() {
    return Menu::onlyTrashed()->get();
  }

  public function findInTrash($slug) {
    return Menu::onlyTrashed()->find($slug);
  }

  public function parmanentDelete($slug) {
    $menu = $this->findInTrash($slug);
    return $menu->forceDelete();
  }
}
