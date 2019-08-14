<?php
namespace App\Repositories\Slider;
interface SliderContract {
  public function findAll();
  public function create($request);
  public function findById($id);
  public function findBySlug($slug);
  public function update($request, $slug);
  public function remove($slug);
}
