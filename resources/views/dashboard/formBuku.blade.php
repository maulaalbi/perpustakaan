<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $tittle }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-navbar></x-navbar>
    <div class="p-4 md:p-5">
        <form class="space-y-4" action="/book" method="post">
         @csrf
         <div>
            <label for="isbn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
         <input type="readonly" name="isbn" id="isbn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required />
         </div>
         <div>
            <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">judul</label>
         <input type="readonly" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required />
         </div>
         <div>
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">STATUS</label>
         <input type="text" name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required />
         </div>
         {{-- <div>
            <label for="nama_peminjam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NAMA PEMINJAM</label>
         <input type="text" name="nama_peminjam" id="nama_peminjam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required />
         </div>
         <div>
            <label for="nim_peminjam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM PEMINJAM</label>
         <input type="text" name="nim" id="nim_peminjam" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required /> --}}
         </div>
         <div class="w-full flex justify-end  ">
          <button type="submit" class=" mb-7 mr-4 uppercase text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah</button>
         </div>
         
            


        </form>
    </div>
</body>
</html>