<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\NewsCategory\NewsCategoryContract;
use Sentinel;

class NewsCategoryController extends Controller
{
    protected $repo;
    public function __construct(NewsCategoryContract $NewsCategoryContract) {
		$this->repo = $NewsCategoryContract;
    }

    public function index() {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{

      }
      $news_categories = $this->repo->findAll();
      return view('news_category.index')->with('news_categories', $news_categories);
    }
    
    public function create() {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        return view('news_category.create');
      }
		
    }
    
    public function store(Request $request) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        $this->validate($request, [
          'name' => 'required',
          'description' => 'required',
        ]);
    
        try {
          $news_category = $this->repo->create($request);
    
          $notification = array(
            'message' => "News Category $news_category->name created successfully",
            'alert-type' => 'success'
          );		
    
          if($news_category->id) {
            return redirect()->back()->with($notification);
          } else {
            return back()->withInput()->with('error', 'Could not create news category. Try again!');
          }
        } catch (QueryException $e) {
          
          $error = array(
            'message' => "News Category $request->name already exists!",
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
        return redirect()->route('auth.login.get');
      }
      else{
        $news_category = $this->repo->findBySlug($slug);
        return view('news_category.show')->with('news_category', $news_category);
      }
  
    }

    public function edit($slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        $news_category = $this->repo->findBySlug($slug);
        return view('news_category.edit')->with('news_category', $news_category);
      }

    }

    public function update(Request $request, $slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        $news_category = $this->repo->update($request, $slug);
        $notification = array(
          'message' => "News Category $news_category->name updated successfully",
          'alert-type' => 'success'
        );
    
        if($news_category->id) {
          return redirect()->route('newsCategory.index')->with($notification);
        }
      }
      
    }

    public function delete($slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        if ($this->repo->remove($slug)) {
          $notification = array(
            'message' => "News Category deleted successfully",
            'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
         } else {
          $error = array(
            'message' => 'Error Deleting News Category',
            'alert-type' => 'error'
          );
          return back()->with($error);
        }    
      }
      }
    
}
