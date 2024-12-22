<?php   

namespace App\Repositories\Book;

use App\Models\Book;
use App\Repositories\BaseRepository;
use App\Repositories\Book\Contracts\BookRepositoryInterface;


class BookRepository extends BaseRepository implements BookRepositoryInterface{

    public function __construct(Book $model){
        parent::__construct($model);
    }

    public function create(array $data): array|null
    {
        $book = $this->model->create($data);
        return $book->toArray;
    }

    public function getById(int $id): Book
    {
       $book = $this->model->findOrFail($id);
       return $book;
    }

    public function getBook():array    {
        return $this->model->all()->toArray();
    }

    public function updateById(array $data): Book|null
    {
        $model = $this->getById($data['id']); // Ambil model
        $model->update($data); // Lakukan update
        $model = $model->fresh(); // Ambil data terbaru

        return $model;
    }
}