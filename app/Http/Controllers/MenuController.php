<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Menu\MenuContract;
class MenuController extends Controller {
	protected $repo;
	public function __construct(MenuContract $menuContract) {
		$this->repo = $menuContract;
	}
	
	public function index() {
		$menus = $this->repo->findAll();
		return view('menu.index')->with('menus', $menus);
	}
	
	public function create() {
		return view('menu.create');
	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
		]);

		try {
			$menu = $this->repo->create($request);

			$notification = array(
				'message' => "Menu $menu->name created successfully",
				'alert-type' => 'success'
			);		

			if($menu->id) {
				return redirect()->back()->with($notification);
			} else {
				return back()->withInput()->with('error', 'Could not create menu item. Try again!');
			}
		} catch (QueryException $e) {
			
			$error = array(
				'message' => "Role $request->name already exists!",
				'alert-type' => 'error'
			);

			$errorCode = $e->errorInfo[1];
			if($errorCode == 1062){
				return redirect()->back()->withInput()->with($error);
			}
		}
	}
	
	public function show($slug) {
		$menu = $this->repo->findBySlug($slug);
		return view('menu.show')->with('menu', $menu);
	}
	
	public function edit($slug) {
		$menu = $this->repo->findBySlug($slug);
		return view('menu.edit')->with('menu', $menu);
	}
	
	public function update(Request $request, $slug) {
		$menu = $this->repo->update($request, $slug);
		$notification = array(
			'message' => "Menu $menu->name updated successfully",
			'alert-type' => 'success'
		);

		if($menu->id) {
			return redirect()->route('menu.index')->with($notification);
		}
	}
	
	public function delete($slug) {
		
		if ($this->repo->remove($slug)) {
			$notification = array(
				'message' => "Menu item deleted successfully",
				'alert-type' => 'success'
			);
      return redirect()->back()->with($notification);
   	} else {
			$error = array(
				'message' => 'Error Deleting Item',
				'alert-type' => 'error'
			);
      return back()->with($error);
    }    
	}

	public function trash() {
		$menus = $this->repo->trash();
		return view('menu.trash')->with('menus', $menus);
	}

	public function parmanentDelete($slug) {
		if ($this->repo->parmanentDelete($slug)) {
			$notification = array(
				'message' => "Menu item deleted Parmenently",
				'alert-type' => 'success'
			);
		} else {
			$error = array(
				'message' => 'Error Deleting Item',
				'alert-type' => 'error'
			);
      return back()->with($error);
		}
		
	}
}
