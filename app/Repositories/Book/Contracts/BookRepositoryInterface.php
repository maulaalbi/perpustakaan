<?php 

namespace App\Repositories\Book\Contracts;

use App\Models\Book;

interface BookRepositoryInterface{
    public function create(array $data):?array;

    public function getById(int $id):?Book;

    public function getBook():array;

    public function updateById(array $data):?Book;
}