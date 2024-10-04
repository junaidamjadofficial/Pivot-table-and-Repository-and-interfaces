<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\UserRepository;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    public function index(){
        echo $this->userRepository->getAllUsers();
    }
    public function store(Request $request){
        $data['name']=$request['name'];
        $data['email']=$request['email'];
        $data['password']=bcrypt($request['password']);
        return $this->userRepository->createUser($data);
    }
    public function delete(Request $request){
        return $this->userRepository->deleteUser($request->id);
    }

    public function attachRole(Request $request){
        $user=$this->userRepository->getUserById($request->user_id);
          if (!$user) {
                return response()->json(['message' => 'User not found'], 404);
            }


        //attach the roles
        $user->roles()->attach($request->role_id, ['created_at' => now(), 'updated_at' => now()]);

        return response()->json(['message' => 'Role attached successfully.']);
    }
    
    public function detachRole(Request $request){
        $user=$this->userRepository->getUserById($request->user_id);

        //attach the roles
        $user->roles()->detach($request->role_id,['updated_at' => now()]);

        return response()->json(['message' => 'Role detached successfully.']);
    }
    
    public function syncRoles(Request $request)
    {
        $user = $this->userRepository->getUserById($request->user_id);
        $role_id=$this->userRepository->getAllUsers()->pluck('id');
        $user->roles()->sync($role_id);

        return response()->json(['message' => 'Roles synced successfully.']);
    }
    public function showRoles($userId)
    {
        $user = $this->userRepository->getUserById($userId);
        $roles = $user->roles;

        return response()->json($roles);
    }
}
