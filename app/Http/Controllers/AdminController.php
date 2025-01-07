<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Services\BookService;
use App\Services\AdminService;
use App\Classes\ApiResponseClass;
use App\Http\Resources\LoginAdmin;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CreateAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Exceptions\AdminServiceException;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller
{
    protected $adminService;
    protected $bookService;


    public function __construct(AdminService $adminService,BookService $bookService){
        $this->adminService = $adminService;
        $this->bookService = $bookService;

    }

    public function createAdmin(Request $request){
        $createAdmin = CreateAdmin::fromArray($request->all());

        try{
            $this->adminService->registerAdmin($createAdmin);
            return ApiResponseClass::sendResponse(null, 'success', 200);
            // return redirect('dashboard.admin');

        } catch (ValidationException $err) {
            return ApiResponseClass::throw($err, $err->errors(), 400);
            
        } catch (Exception $err) {
            return ApiResponseClass::throw($err, $err->getMessage(), 500);

        }
    }

    // public function formLogin(){
    //     return response()->view("login.admin",[
    //         "tittle" => "Login Admin"
    //     ]);
    // }

    // public function listBook(){
    //     return response()->view("dashboard.adminBook" , [
    //         "tittle" => "List Book"
    //     ]);
    // }

    public function doLogin(Request $request){
        $loginAdmin = LoginAdmin::fromArray($request->all());

        try {
            $admin = $this->adminService->login($loginAdmin);
            $book = $this->bookService->getBook();
            $totalBuku = DB::table('books')->count();
            $bukuTersedia = DB::table('books')->where('status',0)->count();
            $bukuDipinjam = DB::table('books')->where('status',1)->count();



          session()->put('admin', $admin);
          session()->put('book', $book);
          session()->put('totalBuku', $totalBuku);
          session()->put('bukuTersedia', $bukuTersedia);
          session()->put('bukuDipinjam', $bukuDipinjam);


            
            return response()->view("dashboard.admin", [
                "tittle" => "DASHBOARD ADMIN",
                "admin" => $admin ,
                "book" => $book ,
                "totalBuku" => $totalBuku,
                "bukuTersedia" => $bukuTersedia ,
                "bukuDipinjam" => $bukuDipinjam
            ]);
           

        }catch (ValidationException $err) {
            // return ApiResponseClass::throw($err, $err->errors(), 400);
            return redirect("/")->with('error', 'Email or Password Wrong');

        } catch (Exception $err) {
            return ApiResponseClass::throw($err, $err->getMessage(), 500);

        }
    }

  

    public function logout(Request $request){
        try{

        //    $request->session()->forget('admin');
        $request->session()->flush();
            // return response()->view("login.admin",[
            //     "tittle" => "LOGIN ADMIN"
            // ]);
            return redirect("/");

        } catch (AdminServiceException $err) {
            return ApiResponseClass::throw($err, 'data not found', 400);
        } catch (ValidationException $err) {
            return ApiResponseClass::throw($err, $err->errors(), 400);
        }

    }
}
