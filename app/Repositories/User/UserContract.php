<?php
namespace App\Repositories\User;
interface UserContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($id);
}
