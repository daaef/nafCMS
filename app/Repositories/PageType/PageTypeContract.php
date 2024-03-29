<?php
namespace App\Repositories\PageType;
interface PageTypeContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($id);
}
