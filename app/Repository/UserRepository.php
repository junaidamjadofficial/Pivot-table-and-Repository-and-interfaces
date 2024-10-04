<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    public function createUser(array $data){
        return User::create($data);
     }
    public function getUserById($id){
        return User::find($id);
    }
    public function getallUsers(){
        return User::all();
    }
    public function updateUser($id,array $data){
        return User::where('id',$id)->update($data);
    }
    public function deleteUser($id){
        return User::destroy($id);
    }
}
