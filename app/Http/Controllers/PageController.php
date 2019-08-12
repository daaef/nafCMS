<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Page\PageContract;
use Sentinel;

class PageController extends Controller {
	protected $repo;
	public function __construct(PageContract $pageContract) {
		$this->repo = $pageContract;
	}
	
	public function index() {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			$pages = $this->repo->findAll();
			return view('page.index')->with('pages', $pages);
		}
	}
	
	public function create(){
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			return view('page.create');
		}
	}
	
	public function store(Request $request) {
		$this->validate($request, [
			'page_title' => 'required',
		]);

		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			// dd($request->all());
			
			try {
				$page = $this->repo->create($request);

				$notification = array(
					'message' => "Page $menu->page_title created successfully",
					'alert-type' => 'success'
				);		

				if($page->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not create Page. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "$request->page_title page already exists!",
					'alert-type' => 'error'
				);

				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
		}		


	}
	
	public function show($id)
	{
		//
	}
	
	public function edit($id) {
		if(!Sentinel::check()) {
			return redirect()->route('auth.login.get');
		}
		else{
			return view('page.create');
		}
	}
	
	public function update(Request $request, $id)
	{
		//
	}
	
	public function delete($id)
	{
		//
	}
}
