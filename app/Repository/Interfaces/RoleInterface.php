<?php

namespace App\Repository\Interfaces;

interface RoleInterface
{
    public function createRole(array $data);
    public function getRoleById($id);
    public function getallRoles();
    public function updateRole($id,array $data);
    public function deleteRole($id);
}
