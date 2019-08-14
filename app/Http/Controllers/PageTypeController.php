<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\PageType\PageTypeContract;
use Sentinel;

class PageTypeController extends Controller {
	protected $repo;
	public function __construct(PageTypeContract $pageTypeContract) {
		$this->repo = $pageTypeContract;
	}
	
	public function index() {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			$pageTypes = $this->repo->findAll();
			return view('pagetype.index')->with('pageTypes', $pageTypes);
		}
		
	}
	
	public function create() {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			return view('pagetype.create');
		}
		
	}
	
	public function store(Request $request) {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			$this->validate($request, [
				'title' => 'required',
			]);
	
			try {
				$pageType = $this->repo->create($request);
	
				$notification = array(
					'message' => "Menu $pageType->title created successfully",
					'alert-type' => 'success'
				);      
	
				if($pageType->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not create page type. Try again!');
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
		
	}
	
	public function show($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			$pageType = $this->repo->findBySlug($slug);
			return view('pagetype.show')->with('pageType', $pageType);
		}
	
	}
	
	public function edit($slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			$pageType = $this->repo->findBySlug($slug);
			return view('pagetype.edit')->with('pageType', $pageType);
		}
		
	}
	
	public function update(Request $request, $slug) {
		if(!Sentinel::check()){
			return redirect()->route('auth.lohin.get');
		}
		else{
			$pageType = $this->repo->update($request, $slug);
			$notification = array(
				'message' => "Page Type $pageType->title updated successfully",
				'alert-type' => 'success'
			);

			if($pageType->id) {
				return redirect()->route('pageType.index')->with($notification);
			}
		}
		
	}
	
	public function delete($slug) {
		
		
	}
}
