<?php
namespace App\Repositories\Leadership;
interface LeadershipContract {
  public function create($request);
  public function findAll();
  public function findById($id);
  public function findBySlug($slug);
  public function update($request, $slug);
  public function remove($id);
}
