<?php
namespace App\Repositories\Gallery;
use App\Repositories\Gallery\GalleryContract;
use App\Gallery;
class EloquentGalleryRepository implements GalleryContract {
    //
    public function create($request){
        $gallery = new Gallery;
        $gallery->title= $request->title;  
        $gallery->description = $request->description;   
        $str = strtolower($request->title);
        $gallery->slug = preg_replace('/\s+/', '-', $str);
        return $gallery;
     }
     public function findAll() {
        $gallery = Gallery::all();
        return $gallery;
    
      }
    
      public function findById($id) {
        $gallery_image = Gallery::whereId($id)->first();
        return $gallery_image;
      }
      public function findBySlug($slug){
        $gallery = Gallery::where('slug', $slug)->first();
        return $gallery;
      }
    
      
      public function update($request, $slug) {
        $gallery_image= $this->findBySlug($slug);
        $gallery_image->title = $request->title;  
        $gallery_image->description = $request->description;    
        $str = strtolower($request->title);
        $gallery_image->slug = preg_replace('/\s+/', '-', $str);
        return $gallery_image;
      }
    
      public function remove($slug) {
        $gallery_image = $this->findBySlug($slug);
        return $gallery_image->delete();
      }
}
