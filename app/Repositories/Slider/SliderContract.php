<?php
namespace App\Repositories\Slider;
interface SliderContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $slug);
  public function remove($slug);
}
