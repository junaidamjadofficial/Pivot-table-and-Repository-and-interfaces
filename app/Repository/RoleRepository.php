<?php

namespace App\Repository;

use App\Models\Role;
use App\Repository\Interfaces\RoleInterface;

class RoleRepository implements RoleInterface
{
   public function createRole(array $data){
        return Role::create($data);
     }
    public function getRoleById($id){
        return Role::find($id);
    }
    public function getallRoles(){
        return Role::all();
    }
    public function updateRole($id,array $data){
        return Role::where('id',$id)->update($data);
    }
    public function deleteRole($id){
        return Role::destroy($id);
    }
}
