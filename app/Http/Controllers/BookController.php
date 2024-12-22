<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Exceptions\BookServiceException;
use App\Http\Resources\CreateBook;
use App\Http\Resources\UpdateBook;
use App\Services\BookService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use App\Exceptions\NotFoundException;
use App\Models\Book;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService){
        $this->bookService = $bookService;
    }

    public function createBook(Request $request){
        $createBook = CreateBook::fromArray($request->all());

        try{
            $data = $this->bookService->addBook($createBook);
            $book = $this->bookService->getBook();
            Session::put("book" , $book);
            
            return redirect("/tersedia");
            
            

        } catch (ValidationException $err) {
            return ApiResponseClass::throw($err, $err->errors(), 400);
            
        } catch (Exception $err) {
            return ApiResponseClass::throw($err, $err->getMessage(), 500);

        }
    }

    public function getById(Request $request , string $id){
        try {
            $books = $this->bookService->getById($id);

            // return ApiResponseClass::sendResponse($data, 'success', 200);
            return view("dashboard.formUpdateBook" , compact("books"));
        } catch (ValidationException $err) {
            return ApiResponseClass::throw($err, ['errors' => $err->errors()], 400);
        } catch (\Exception $err) {
            return ApiResponseClass::throw($err, ['errors' => 'Something went wrong'], 500);
        }
    }

    public function updateById(Request $request,string $id  ){
        $req = $request->all();
        $req['id'] = (int)$id;
        $body = UpdateBook::fromArray($req);
        
        try{
            $data = $this->bookService->updateById($body);
            $book = $this->bookService->getBook();
            Session::put("book" , $book);

            return redirect("/borrow");
            // return ApiResponseClass::sendResponse($data, 'success', 200);
            }catch (BookServiceException $err) {
                return ApiResponseClass::throw($err, $err->errors(), 400);
            } catch (ModelNotFoundException $err) {
                return ApiResponseClass::throw($err, $err->getMessage(), 404);
            } catch (Exception $err) {
                return ApiResponseClass::throw($err, $err->getMessage(), 400);
            }
        }
        
    

    // public function showBook(){
    //     try{
    //         $book = $this->bookService->getBook();
    //         // return response()->view("dashboard." , [
    //         //     "tittle" => "List Book",
    //         //     "book" => $book
    //         // ]);
    //         return $book;

    //     } catch (AdminServiceException $err) {
    //         return ApiResponseClass::throw($err, 'data not found', 400);
    //     } catch (ValidationException $err) {
    //         return ApiResponseClass::throw($err, $err->errors(), 400);
    //     }
    // }

}
