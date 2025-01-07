<?php 

namespace App\Repositories\Admin\Contracts;

use App\Models\Admin;

interface AdminRepositoryInterface{
    public function create(array $data): ?array;
    
    public function getByEmail(string $email) : ?Admin;

}