<?php 


namespace App\Services;

use App\Http\Resources\CreateBook;
use App\Http\Resources\UpdateBook;
use App\Repositories\Book\Contracts\BookRepositoryInterface;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class BookService{

    protected $bookRepository;

    public function __construct(BookRepositoryInterface $bookRepository){
        $this->bookRepository = $bookRepository;
    }

    public function addBook(CreateBook $data){
        try{
            $newData = $this->validateAddBook($data);
            $book = $this->bookRepository->create($newData);
        } catch (ValidationException $err) {
            throw $err;
        } catch (Exception $err) {
            throw $err;
        }
        return $book;
    }
    

    protected function validateAddBook(CreateBook $data): array
    {
        $validator = Validator::make($data->toArray(), [
            'isbn' => 'required',
            'judul' => 'required',
            'status' => '',
            'nama_peminjam' => '',
            'nim_peminjam' => ''


        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator->validated();
    }
    public function getById(int $id ){
        try{
                $data = $this->bookRepository->getById($id);

                return $data;

            }catch (ValidationException $err) {
                throw $err;
            }catch (Exception $err) {
                throw $err;
            }
    }

    public function updateById(UpdateBook $data){
        try {
            $validatedData = $this->validateUpdateBook($data);
            // dd($validatedData);
            $book = $this->bookRepository->updateById($validatedData);
            // dd($book);
            return $book;

            // dd($book);
        } catch (ModelNotFoundException $err) {
            throw new ModelNotFoundException('failed, data not found');
        } catch (Exception $err) {
            throw $err;
        }


    }
    protected function validateUpdateBook(UpdateBook $data): array
    {
        $validator = Validator::make($data->toArray(), [
            'isbn' => '',
            'judul' => '',
            'status' => '',
            'nama_peminjam' => '',
            'nim_peminjam' => '',
            'id' => ''


        ]);

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }

        return $validator->validated();
    }

    public function getBook(): array{
        return $this->bookRepository->getBook();
    }

}