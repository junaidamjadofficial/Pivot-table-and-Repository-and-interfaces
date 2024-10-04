<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\RoleRepository;

class RoleController extends Controller
{
    protected $roleRepository;
    public function __construct(RoleRepository $roleRepository){
        $this->roleRepository = $roleRepository;
    }
    public function index(){
        echo $this->roleRepository->getAllRoles();
    }
    public function store(Request $request){
        $data['name']=$request['name'];
      
        return $this->roleRepository->createRole($data);
    }
    public function delete(Request $request){
        return $this->roleRepository->deleteRole($request->id);
    }
}
