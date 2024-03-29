<?php
namespace App\Repositories\Setting;
interface SettingContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($slug);
}
