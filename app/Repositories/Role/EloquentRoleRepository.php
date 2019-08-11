<?php
namespace App\Repositories\Role;
use App\Repositories\Role\RoleContract;
use App\Role;

class EloquentRoleRepository implements RoleContract {
  
  //create a Role.
  
  public function create($request) {
    $role = new Role;
    $role->name = $request->name;
    $role->permissions = $request->permissions;
    $role->description = $request->description;
    
    $str = strtolower($request->name);

    $role->slug = preg_replace('/\s+/', '-', $str);
    $role->save()      ;
    return $role;
  }

  // return all Roles
  public function findAll() {
    $roles = Role::all();
    return $roles;
  }

  // return a Role by ID
  public function findById($id) {
    return Role::where('id', $id)->first();
  }

  // return a Role by slug
  public function findBySlug($slug){
    return Role::where('slug', $slug)->first();
  }

  // Update a Role
  public function update($request, $slug) {
    $updateRole = $this->findBySlug($slug);
    $updateRole->name = $request->name;
    $updateRole->permissions = $request->permissions;
    $updateRole->description = $request->description;
    
    $str = strtolower($request->name);

    $updateRole->slug = preg_replace('/\s+/', '-', $str);
    $updateRole->save();
    return $updateRole;
  }

  // Remove a Role
  public function remove($id) {
    $role = $this->findById($id);
    return $role->delete();
  }
}
