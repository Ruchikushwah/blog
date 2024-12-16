@extends('admin.adminlayout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Admin Dashboard Layout -->
  <div class="min-h-screen flex">

   

    <!-- Main Content -->
    <div class="flex-1 flex flex-col mt-5">
      <!-- Header -->
      <header class="bg-white shadow-md p-5 flex justify-between items-center">
        <div>
          <h2 class="text-2xl font-semibold">Dashboard</h2>
        </div>
        <div class="flex items-center space-x-4">
          <div class="relative">
            <input type="text" class="p-2 border border-gray-300 rounded-lg" placeholder="Search...">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute top-3 right-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z" />
            </svg>
          </div>
          <div class="relative">
            <button class="flex items-center focus:outline-none">
              <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
              <span class="ml-2">Admin</span>
              <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white shadow-md rounded-md hidden">
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Settings</a>
              <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
          </div>
        </div>
      </header>

      <!-- Dashboard Content -->
      <main class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Card 1: Total Posts -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Total Posts</h3>
                <p class="mt-2 text-3xl font-bold">{{\App\Models\Post::count()}}</p>
              </div>
              <div class="bg-blue-100 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l9-5-9-5-9 5 9 5z" />
                </svg>
              </div>
            </div>
          </div>

          <!-- Card 2: Total Users -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Total Users</h3>
                <p class="mt-2 text-3xl font-bold">{{\App\Models\User::count()}}</p>
              </div>
              <div class="bg-green-100 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12l-4 4m0 0l-4-4m4 4V4" />
                </svg>
              </div>
            </div>
          </div>

          <!-- Card 3: Total Comments -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Total Topic</h3>
                <p class="mt-2 text-3xl font-bold">{{\App\Models\Topic::count()}}</p>
              </div>
              <div class="bg-yellow-100 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4" />
                </svg>
              </div>
            </div>
          </div>

          <!-- Card 4: Total Views -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center justify-between">
              <div>
                <h3 class="text-xl font-semibold text-gray-800">Total Draft</h3>
                <p class="mt-2 text-3xl font-bold">1.2K</p>
              </div>
              <div class="bg-red-100 p-2 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h1l1-2h2l1 2h1l1-2h2l1 2h1v4h-1l-1 2h-2l-1-2H9l-1 2H6l-1-2H4l-1 2H2v-4h1z" />
                </svg>
              </div>
            </div>
          </div>

        </div>

        <!-- Chart Section -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
          <h2 class="text-lg font-semibold">User Engagement Overview</h2>
          <div class="mt-4">
            <!-- Replace this with a real chart using Chart.js or any other library -->
            <div class="h-48 bg-gray-200 rounded-lg">Chart Placeholder</div>
          </div>
        </div>
      </main>
    </div>

  </div>

</body>
</html>


@endsection