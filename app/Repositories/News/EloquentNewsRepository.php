<?php
namespace App\Repositories\News;
use App\Repositories\News\NewsContract;
use App\MyNews;
use Image;

class EloquentNewsRepository implements NewsContract {
  //create a news category.
  
  public function create($request) {
    $news = new MyNews;
    $news->title = $request->title;  
    $news->body = $request->body;   
    
    if ($request->has('news_image')) {
      $originalImage= $request->file('news_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/news/thumbnail/');
      $originalPath = public_path('uploads/news/images/');
      $watermark = public_path('uploads/news/watermark/logo.png');
      // dd($originalPath);

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      // $thumbnail = time().$originalImage->getClientOriginalName();
      $thumbnailImage->save($thumbnailPath.$filename); 

      $news->news_image = $filename;
    }
    
    $news->news_category = $request->news_category;
    $str = strtolower($request->title);
    $news->slug = preg_replace('/\s+/', '-', $str);
    $news->tags = $request->tags;
    $news->save();
    return $news;
  }

  // return all news category
  public function findAll() {
    return MyNews::all();
  }

  // return a news category by ID
  public function findById($id) {
    return MyNews::where('id', $id)->first();
  }

  // return a news category by slug
  public function findBySlug($slug){
    return MyNews::where('slug', $slug)->first();
  }

  // Update a news
  public function update($request, $slug) {
    $news = $this->findBySlug($slug);
    $news->title = $request->title;  
    $news->body = $request->body;   
    // $news->news_image = $request->news_image;  
    if ($request->has('news_image')) {
      $image = $request->file('news_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('uploads/news/');
      $image->move($destinationPath, $filename);  

      $news->news_image = $filename;
    }
    $news->news_category = $request->news_category;
    $str = strtolower($request->title);
    $news->slug = preg_replace('/\s+/', '-', $str);
    $news->tags = $request->tags;
    $news->save();
    return $news;
  }

  // Remove news
  public function remove($slug) {
    $news = $this->findBySlug($slug);
    return $news->delete();
  }

//   public function trash() {
//     return Menu::onlyTrashed()->get();
//   }

//   public function findInTrash($slug) {
//     return Menu::onlyTrashed()->find($slug);
//   }

//   public function parmanentDelete($slug) {
//     $menu = $this->findInTrash($slug);
//     return $menu->forceDelete();
//   }
}
