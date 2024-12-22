<?php 

namespace App\Repositories\Admin\Contracts;

interface AdminRepositoryInterface{
    public function create(array $data): ?array;
    
    public function getByEmail(string $email) : array;

}