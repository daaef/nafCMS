<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use Illuminate\Database\QueryException;
use App\Repositories\Menu\MenuContract;
use Sentinel;
class MenuController extends Controller {
	protected $repo;
	public function __construct(MenuContract $menuContract) {
		$this->repo = $menuContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
			$menus = $this->repo->findAll();
			return view('menu.index')->with('menus', $menus);
		}
		
=======
		}else{
			$menus = $this->repo->findAll();
			return view('menu.index')->with('menus', $menus);
		}		
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	}
	
	public function create() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
			return view('menu.create');
		}
	
	}
	
	public function store(Request $request) {

		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}
		else{
			$this->validate($request, [
				'name' => 'required',
			]);
=======
		}else{
			return view('menu.create');
		}

	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
		]);

		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		} else {			
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	
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
		
<<<<<<< HEAD
	
=======
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	}
	
	public function show($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
			$menu = $this->repo->findBySlug($slug);
			return view('menu.show')->with('menu', $menu);
		}
	
=======
		}else{
			$menu = $this->repo->findBySlug($slug);
			return view('menu.show')->with('menu', $menu);
		}
		
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	}
	
	public function edit($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
=======
		}else{
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
			$menu = $this->repo->findBySlug($slug);
			return view('menu.edit')->with('menu', $menu);
		}
	
	}
	
	public function update(Request $request, $slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
			$menu = $this->repo->update($request, $slug);
			$notification = array(
				'message' => "Menu $menu->name updated successfully",
				'alert-type' => 'success'
			);
	
			if($menu->id) {
				return redirect()->route('menu.index')->with($notification);
			}
		}
	
=======
		}else{
			$menu = $this->repo->update($request, $slug);
			$notification = array(
				'message' => "Menu $menu->name updated successfully",
				'alert-type' => 'success'
			);

			if($menu->id) {
				return redirect()->route('menu.index')->with($notification);
			}
		}
		
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	}
	
	public function delete($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
=======
		}else{
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
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
<<<<<<< HEAD
			} 
		}
		   
=======
			}    
		}
		
		
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
	}

	public function trash() {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
<<<<<<< HEAD
		}
		else{
			$menus = $this->repo->trash();
			return view('menu.trash')->with('menus', $menus);
		}
	
	}

	public function parmanentDelete($slug) {
		if(!Sentinel::ccheck()){
			return redirect()->route('auth.login.get');
		}
		else{
=======
		}else{
			$menus = $this->repo->trash();
			return view('menu.trash')->with('menus', $menus);
		}
		
	}

	public function parmanentDelete($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.login.get');
		}else{
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
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
<<<<<<< HEAD
			
		}
		}
		
=======
		}
		
		
	}
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
}
