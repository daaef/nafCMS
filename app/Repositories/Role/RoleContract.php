<?php
namespace App\Repositories\Role;
interface RoleContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($id);
}
