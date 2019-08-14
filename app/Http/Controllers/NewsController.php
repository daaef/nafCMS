<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\News\NewsContract;
use App\Repositories\NewsCategory\NewsCategoryContract;
use Sentinel;

class NewsController extends Controller
{
    protected $repo;
    public function __construct(NewsContract $NewsContract, NewsCategoryContract $NewsCategoryContract) {
        $this->repo = $NewsContract;
        $this->repos = $NewsCategoryContract;
    }

    public function index() {
      if(!Sentinel::check()){
        return redirect()->route('auth.login.get');
      }
      else{
        $news = $this->repo->findAll();
        $news_categories = $this->repos->findAll();
        return view('news.index')->with('news', $news)->with('news_categories', $news_categories);
      }

    }

    public function store(Request $request) {
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required',
          'news_image' => 'image|required|mimes:jpeg,png,jpg,gif,svg',
          'tags' => 'required',
        ]);
    
        try {
          $news = $this->repo->create($request);
          
          $notification = array(
            'message' => "News $news->name created successfully",
            'alert-type' => 'success'
          );		
    
          if($news->id) {
            return redirect()->back()->with($notification);
          } else {
            return back()->withInput()->with('error', 'Could not create news. Try again!');
          }
        } catch (QueryException $e) {
          
          $error = array(
            'message' => "News $request->name already exists!",
            'alert-type' => 'error'
          );
    
          $errorCode = $e->errorInfo[1];
          if($errorCode == 1062){
            return redirect()->back()->withInput()->with($error);
          }
        }
    }

    public function update(Request $request, $slug) {
        $news = $this->repo->update($request, $slug);
        $notification = array(
          'message' => "News $news->name updated successfully",
          'alert-type' => 'success'
        );
    
        if($news->id) {
          return redirect()->route('news.index')->with($notification);
        }
      }
  
    public function delete($slug) {
          
        if ($this->repo->remove($slug)) {
          $notification = array(
            'message' => "News deleted successfully",
            'alert-type' => 'success'
          );
          return redirect()->back()->with($notification);
         } else {
          $error = array(
            'message' => 'Error Deleting News',
            'alert-type' => 'error'
          );
          return back()->with($error);
        }    
    }
}
