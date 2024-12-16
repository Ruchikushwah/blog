<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Admin Header -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      
      <!-- Logo -->
      <div class="text-2xl font-bold text-gray-800">
        <a href="#" class="hover:text-blue-600">Admin Dashboard</a>
      </div>

      <!-- Search Bar -->
      <div class="relative w-1/3">
        <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Search blog posts...">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute top-2.5 right-3 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.293 12.293a1 1 0 011.414 0l5 5a1 1 0 01-1.414 1.414l-5-5a1 1 0 010-1.414zm-6.746 1.114a7 7 0 111.414-1.414 7 7 0 01-1.414 1.414z" clip-rule="evenodd" />
        </svg>
      </div>

      <!-- Navigation Links -->
      <nav class="space-x-6">
        <a href="{{route('admin.dashboard')}}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
        <a href="{{route('admin.topics')}}" class="text-gray-700 hover:text-blue-600">Topic</a>
        <a href="{{route('admin.post')}}" class="text-gray-700 hover:text-blue-600">manage post</a>
        <a href="{{route('admin.post.create')}}" class="text-gray-700 hover:text-blue-600">insert post</a>
      </nav>

      <!-- Profile Dropdown -->
      <div class="relative">
        <button id="profileButton" class="flex items-center focus:outline-none focus:ring focus:ring-blue-500 rounded-lg">
          <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full">
          <span class="ml-2 text-gray-800">Admin</span>
          <svg class="w-4 h-4 ml-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
      </div>

    </div>
  </header>

 
</body>
</html>
