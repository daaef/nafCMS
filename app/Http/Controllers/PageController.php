<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Page\PageContract;
use App\Repositories\Menu\MenuContract;
use Sentinel;

class PageController extends Controller {
	
	protected $repo;
	protected $menuRepo;

	public function __construct(PageContract $pageContract, MenuContract $menuContract) {
		$this->repo = $pageContract;
		$this->menuRepo = $menuContract;
	}
	
	public function index() {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			$pages = $this->repo->findAll();
			// dd($pages);	
			return view('page.index')->with('pages', $pages);
		}
	}
	
	public function create(){
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			$menus = $this->menuRepo->findAll();
			// dd($menus);
			return view('page.create')->with('menus', $menus);
		}
	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'name' => 'required',
		]);

		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			// dd($request->all());
			
			try {

				$page = $this->repo->create($request);

				if ($request->child_menu === 'on') {		      
		      $parent = $this->menuRepo->findBySlug($request->parent_menu);
		      $page->menu_id = $parent->id;
		    }

				// dd($page);
				$page->save();

				$notification = array(
					'message' => "Page $page->name created successfully",
					'alert-type' => 'success'
				);		

				if($page->id) {
					return redirect()->route('page.index')->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not create Page. Try again!');
				}
			} catch (QueryException $e) {				
				
				$error = array(
					'message' => "$request->name page already exists!",
					'alert-type' => 'error'
				);

				$errorCode = $e->errorInfo[1];

				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}
	}
	
	public function show($slug) {
		$page = $this->repo->findBySlug($slug);
		// dd($page);
		return view('page.show')->with('page', $page);
	}
	
	public function edit($id) {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			return view('page.create');
		}
	}
	
	public function update(Request $request, $id) {
		//
	}
	
	public function delete($id) {
		//
	}

	
}
