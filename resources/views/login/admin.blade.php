<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $tittle }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    
</head>
<body>
    @if(isset($error))
    <div class="row">
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    </div>
    @endif
<div class="container px-4 py-5 w-full ">

    {{-- <div class="row align-items-center g-lg-5 py-5"> --}}
        {{-- <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">Login</h1>
        
        </div> --}}
        {{-- <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/admin/login">
                @csrf
                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="email" placeholder="email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="password" type="password" class="form-control" id="password" placeholder="password">
                    <label for="password">Password</label> 
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
            </form>
        </div> --}}
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="  ml-96 py-8 px-2 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16  ">
                <div>
                    <div class="  sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
                            LOGIN 
                        </h2>
                        <form class="mt-8 space-y-6" action="/admin/login" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
            
                        </form>
                    </div>
                </div>
            </div>
        </section>
    {{-- </div> --}}
</div>






  

</body>
</html>

