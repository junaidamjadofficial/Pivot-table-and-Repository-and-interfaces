<?php

namespace App\Repository\Interfaces;

interface UserInterface
{
    public function createUser(array $data);
    public function getUserById($id);
    public function getallUsers();
    public function updateUser($id,array $data);
    public function deleteUser($id);
}
