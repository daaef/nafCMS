<?php
namespace App\Repositories\News;
interface NewsContract {
  public function create($request);
  public function findAll();
//   public function findById($id);
//   public function update($request, $id);
//   public function remove($id);
}
