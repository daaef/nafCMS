<?php

namespace App\Http\Controllers;
use Sentinel;
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
<<<<<<< HEAD

      }else{

      }
      $news_categories = $this->repo->findAll();
      return view('news_category.index')->with('news_categories', $news_categories);
=======
        return redirect()->route('auth.login.get');
      }
      else{
        $news_categories = $this->repo->findAll();
        return view('news_category.index')->with('news_categories', $news_categories);
      }
      
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
    }
    
    public function create() {
      if(!Sentinel::check()){
<<<<<<< HEAD
          return redirect()->route('auth.login.get');
      }else{
=======
        return redirect()->route('auth.login.get');
      }
      else{
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
        return view('news_category.create');
      }
		
    }
    
    public function store(Request $request) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
<<<<<<< HEAD
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
=======
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
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
        }
      }
    }
   }

    public function show($slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
<<<<<<< HEAD
      }else{
       $news_category = $this->repo->findBySlug($slug);
      return view('news_category.show')->with('news_category', $news_category);
      }
=======
      }
      else{
        $news_category = $this->repo->findBySlug($slug);
        return view('news_category.show')->with('news_category', $news_category);
      }
  
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
    }

    public function edit($slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        $news_category = $this->repo->findBySlug($slug);
        return view('news_category.edit')->with('news_category', $news_category);
      }
<<<<<<< HEAD
=======

>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
    }

    public function update(Request $request, $slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
<<<<<<< HEAD
      }else{
        $news_category = $this->repo->update($request, $slug);
      $notification = array(
        'message' => "News Category $news_category->name updated successfully",
        'alert-type' => 'success'
      );
  
      if($news_category->id) {
        return redirect()->route('newsCategory.index')->with($notification);
      }
=======
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
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
      }
      
    }

    public function delete($slug) {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
<<<<<<< HEAD
      }else{
=======
      }
      else{
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
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
<<<<<<< HEAD
     
=======
    
>>>>>>> 085674490130ae2f78ab4a9d69d6be256bd55fe8
}
