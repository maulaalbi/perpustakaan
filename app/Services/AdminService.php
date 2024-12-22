<?php 

namespace App\Services;

use App\Exceptions\AdminServiceException;
use App\Http\Resources\CreateAdmin;
use App\Http\Resources\CreateUser;
use App\Http\Resources\LoginAdmin;
use App\Repositories\Admin\Contracts\AdminRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminService {

    protected $adminRepository;
    public function __construct(AdminRepositoryInterface $adminRepository){
        $this->adminRepository = $adminRepository;
    }

    public function registerAdmin(CreateAdmin $data){
        try{
            $validateData = $this->validateCreateUser($data);

            $this->adminRepository->create($validateData);
        }catch (ValidationException $e) {
            throw $e;
        } catch (Exception $e) {
            throw $e;
        }
    }

    protected function validateCreateUser(CreateAdmin $data){
        $validator = Validator::make($data->toArray(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        
        ]);
      
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
      
        return $validator->validated();
    }

    public function getByEmail(string $email){
        try{
            $users = $this->adminRepository->getByEmail($email);
            return $users;
        }catch(ModelNotFoundException $err){
        throw new ModelNotFoundException('failed, data not found');

        }catch(Exception $err){
            throw $err;
        }

    }

    public function login(LoginAdmin $data){
       try{
        $validateData = $this->validateLogin($data);
        $admin = $this->adminRepository->getByEmail($validateData['email']);

        if(!$admin){
            throw AdminServiceException::withMessages([
                'error' => 'Unauthorized',
                'statusCode' => 401
            ]);
        }
        
        if(!Hash::check($validateData['password'], $admin['password'])){
            throw AdminServiceException::withMessages([
                'error' => 'Unauthorized',
                'statusCode' => 401
            ]);

        }
        
        return $admin;
       }catch (ValidationException $e) {
        // Handle validation exception as per your application's needs
        throw $e;
        } catch (Exception $e) {
        // Handle any other exceptions
        throw $e;
      }
    }

    public function logout(){
        try {
            session()->forget('admin');
        } catch (Exception $e) {
            // Handle any other exceptions
            throw $e;
        }
    }

    protected function validateLogin(LoginAdmin $data){
        $validator = Validator::make($data->toArray(), [
            'email' => 'required|email',
            'password' => 'required'
        
        ]);
      
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
      
        return $validator->validated();
    }

    
}