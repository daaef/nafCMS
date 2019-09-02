<?php
namespace App\Repositories\Media;
use App\Repositories\Media\MediaContract;
use App\Media;
class EloquentMediaRepository implements MediaContract {
  //create a news category.  
  public function create($request) {
    $medias = new Media;
    $medias->title = $request->title;  
    $medias->body = $request->body;   
    
    if ($request->has('news_image')) {
      $originalImage= $request->file('news_image');
      $thumbnailImage = Image::make($originalImage);
      $thumbnailPath = public_path('uploads/medias/thumbnail/');
      $originalPath = public_path('uploads/medias/images/');
      $watermark = public_path('uploads/medias/watermark/logo.png');
      // dd($originalPath);

      $filename = time().$originalImage->getClientOriginalName();
      $thumbnailImage->insert($watermark, 'bottom-right', 1, 1);
      $thumbnailImage->save($originalPath.$filename);
      $thumbnailImage->resize(150,150);

      // $thumbnail = time().$originalImage->getClientOriginalName();
      $thumbnailImage->save($thumbnailPath.$filename); 

      $medias->news_image = $filename;
    }
    $medias->news_category = $request->news_category;
    $str = strtolower($request->title);
    $medias->slug = preg_replace('/\s+/', '-', $str);
    $medias->tags = $request->tags;
    $medias->save();
    return $medias;
  }

  // return all medias category
  public function findAll() {
    return Media::all();
  }

  // return a medias category by ID
  public function findById($id) {
    return Media::where('id', $id)->first();
  }

  // return a medias category by slug
  public function findBySlug($slug){
    return Media::where('slug', $slug)->first();
  }

  // Update a medias
  public function update($request, $slug) {
    $medias = $this->findBySlug($slug);
    $medias->title = $request->title;  
    $medias->body = $request->body;   
    // $medias->news_image = $request->news_image;  
    if ($request->has('news_image')) {
      $image = $request->file('news_image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('uploads/medias/');
      $image->move($destinationPath, $filename);  

      $medias->news_image = $filename;
    }
    $medias->news_category = $request->news_category;
    $str = strtolower($request->title);
    $medias->slug = preg_replace('/\s+/', '-', $str);
    $medias->tags = $request->tags;
    $medias->save();
    return $medias;
  }

  // Remove medias
  public function remove($slug) {
    $medias = $this->findBySlug($slug);
    return $medias->delete();
  }
}
