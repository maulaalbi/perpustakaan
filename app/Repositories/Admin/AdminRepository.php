<?php 

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Repositories\Admin\Contracts\AdminRepositoryInterface;
use App\Repositories\BaseRepository;

class AdminRepository extends BaseRepository implements AdminRepositoryInterface{
    public function __construct(Admin $model){
        parent::__construct($model);
    }

    public function create(array $data): array|null
    {
        $admin = $this->model->create($data);
        return $admin->toArray();
    }

    public function getByEmail(string $email): array
    {
        return $this->model->where("email" , $email)->first()->toArray();
    }

    
}