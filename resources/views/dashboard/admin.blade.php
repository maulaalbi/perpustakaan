<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style></style>
    <title>{{ $tittle }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
/* Base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background-color: #F9FAFB;
    color: #111827;
    line-height: 1.5;
}

.container {
    max-width: 1300px;
}

/* Header styles */
.header {
    background-color: white;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1.5rem 0;
}

.logo-section {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.logo-section h1 {
    font-size: 1.5rem;
    font-weight: 700;
}

.search-section {
    position: relative;
}

.search-section input {
    padding: 0.5rem 1rem 0.5rem 2.5rem;
    border: 1px solid #D1D5DB;
    border-radius: 0.5rem;
    width: 300px;
    font-size: 0.875rem;
}

.search-section input:focus {
    outline: none;
    border-color: #3B82F6;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
}

.icon {
    width: 1.5rem;
    height: 1.5rem;
    color: #3B82F6;
}

.search-icon {
    position: absolute;
    left: 0.75rem;
    top: 50%;
    transform: translateY(-50%);
    width: 1.25rem;
    height: 1.25rem;
    color: #9CA3AF;
}

/* Main content styles */
.main-content {
    padding: 2rem 0;
}

.books-card {
    background-color: white;
    border-radius: 0.75rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    border-bottom: 1px solid #E5E7EB;
}

.card-header h2 {
    font-size: 1.25rem;
    font-weight: 600;
}

/* Table styles */
.table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background-color: #F9FAFB;
    padding: 1rem 1.5rem;
    text-align: left;
    font-size: 0.875rem;
    font-weight: 500;
    color: #6B7280;
}

td {
    padding: 1rem 1.5rem;
    font-size: 0.875rem;
    color: #374151;
}

tbody tr {
    border-bottom: 1px solid #E5E7EB;
}

tbody tr:hover {
    background-color: #F9FAFB;
}

.book-cover {
    width: 4rem;
    height: 5rem;
    object-fit: cover;
    border-radius: 0.375rem;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}

.status-badge {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background-color: #DEF7EC;
    color: #03543F;
    border-radius: 9999px;
    font-size: 0.875rem;
}

.borrow-button {
    padding: 0.5rem 1rem;
    background-color: #3B82F6;
    color: white;
    border: none;
    border-radius: 0.5rem;
    font-size: 0.875rem;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.borrow-button:hover {
    background-color: #2563EB;
}

.borrow-button:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.4);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }

    .search-section input {
        width: 100%;
        min-width: 200px;
    }

    .table-container {
        margin: 0 -1rem;
    }
}
/* Dashboard content styles */
.dashboard {
  padding: 2rem 0;
}

.dashboard-header {
  margin-bottom: 2rem;
}

.dashboard-title {
  font-size: 1.875rem;
  font-weight: 700;
  color: #111827;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1.5rem;
  margin-bottom: 2rem;
}

.stat-card {
  background: white;
  padding: 1.5rem;
  border-radius: 0.75rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.stat-title {
  font-size: 0.875rem;
  color: #6b7280;
  margin-bottom: 0.5rem;
}

.stat-value {
  font-size: 1.875rem;
  font-weight: 700;
  color: #111827;
}

.stat-change {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 0.5rem;
  font-size: 0.875rem;
}

.stat-change.positive {
  color: #059669;
}

.stat-change.negative {
  color: #dc2626;
}

.recent-activity {
  background: white;
  border-radius: 0.75rem;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.activity-header {
  padding: 1.25rem;
  border-bottom: 1px solid #e5e7eb;
}

.activity-title {
  font-size: 1.25rem;
  font-weight: 600;
  color: #111827;
}

.activity-list {
  list-style: none;
}

.activity-item {
  padding: 1rem 1.25rem;
  border-bottom: 1px solid #e5e7eb;
  display: flex;
  align-items: center;
  gap: 1rem;
}

.activity-icon {
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f3f4f6;
}

.activity-content {
  flex: 1;
}

.activity-text {
  font-size: 0.875rem;
  color: #374151;
}

.activity-time {
  font-size: 0.75rem;
  color: #6b7280;
  margin-top: 0.25rem;
}

/* Base styles and resets */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background-color: #f3f4f6;
  color: #111827;
  min-height: 100vh;
}

/* Utility classes */
.container {
  max-width: 1440px;
  margin: 0 auto;
}

.flex {
  display: flex;
}

.items-center {
  align-items: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-4 {
  gap: 1rem;
}
/* Base styles and resets */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background-color: #f3f4f6;
  color: #111827;
  min-height: 100vh;
}

/* Utility classes */
.container {
  max-width: 1440px;
  margin: 0 auto;

}

.flex {
  display: flex;
}

.items-center {
  align-items: center;
}

.justify-between {
  justify-content: space-between;
}

.gap-4 {
  gap: 1rem;
}
    </style>
</head>
<body>
        
  <div class="container">
        
    
    <x-navbar>

    
        {{ session('admin.name') }}


        
    </x-navbar>

        <div class="stats-grid  mt-40">
          <div class="stat-card">
              <h3 class="stat-title uppercase">Total Buku</h3>
              <p class="stat-value">{{ $totalBuku }}</p>
             
          </div>

          <div class="stat-card uppercase">
              <h3 class="stat-title">Buku Tersedia</h3>
              <p class="stat-value">{{ $bukuTersedia }}</p>
             
          </div>

          <div class="stat-card">
              <h3 class="stat-title uppercase">Buku Dipinjam</h3>
              <p class="stat-value">{{ $bukuDipinjam }}</p>
             
          </div>
      </div>
      <ul class="nav-menu ml-10">
        <li><a href="/formBuku" class="nav-button"><i class="fas fa-plus-circle"></i> Tambah Buku</a></li>
      </ul>
      <main class="main-content mt-0">
        <div class="container">
            <div class="books-card">
                <div class="card-header">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                    </svg>
                    <h2 class="uppercase">Daftar Buku Dipinjam</h2>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr class="uppercase" >
                
                                <th  class="font-bold text-black">ISBN</th>
                                <th  class="font-bold text-black">Title</th>
                                <th  class="font-bold text-black">Status</th>
                                <th  class="font-bold text-black">Nama Peminjam</th>
                                <th  class="font-bold text-black">Nim Peminjam</th>
                                <th  class="font-bold text-black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                            @foreach (collect(session('book'))->filter(function($book) {
                              return $book['status'] == 1;
                          })  as $books )
                            
                                
                            
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $books['isbn'] }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $books['judul'] }}
                                </td>
                                <td class="px-6 py-4 uppercase">
                                  @if ($books['status'] ==0)
                                      {{ "Buku tersedia" }}
                                  @elseif ($books['status']==1)
                                      {{ "Buku Sedang Dipinjam" }}
              
                                  @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $books['nama_peminjam'] }}
                                </td>
                
                                <td class="px-6 py-4">
                                    {{ $books['nim_peminjam'] }}
                                </td>
                                <td class="px-6 py-4">
                                  <button class=" uppercase text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> 
              
                                      <a href="/book/{{ $books['id'] }}" `>BUKU DIKEMBALIKAN</a>
                  
                                      </button>
                              </td>
                            </tr>
              
                            @endforeach
                            
                            
                            
                        </tbody>
              
                    </table>
                </div>
            </div>
        </div>
    </main>

    <main class="main-content">
      <div class="container">
          <div class="books-card">
              <div class="card-header">
                  <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"></path>
                  </svg>
                  <h2 class="uppercase">Daftar Buku Tersedia</h2>
              </div>
              
              <div class="table-container">
                  <table>
                      <thead>
                          <tr class="uppercase">
              
                              <th class="font-bold text-black">ISBN</th>
                              <th class="font-bold text-black"class="font-bold text-black">Title</th>
                              <th class="font-bold text-black">Status</th>
                              <th class="font-bold text-black">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                
                          @foreach (collect(session('book'))->filter(function($book) {
                            return $book['status'] == 0;
                        })  as $books )
                          
                              
                          
                          <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                  {{ $books['isbn'] }}
                              </th>
                              <td class="px-6 py-4">
                                  {{ $books['judul'] }}
                              </td>
                              <td class="px-6 py-4 uppercase">
                                @if ($books['status'] ==0)
                                    {{ "Buku tersedia" }}
                                @elseif ($books['status']==1)
                                    {{ "Buku Sedang Dipinjam" }}
              
                              </td>
                              <td>
                                
                            
                              @endif
                              <td>
                                  <button class=" uppercase text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> 
              
                                  <a href="/book/{{ $books['id'] }}" `>PINJAM BUKU</a>
              
                                  </button>
              
                              </td>
                          
                          </tr>
              
                          @endforeach
                          
                          
                          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </main>
    </div>

  </div>
</body>
</html>




  
 
  
  
  
  