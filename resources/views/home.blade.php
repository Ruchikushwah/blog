@extends('layout')
@section('content')



<div class="flex flex-1 px-[10%] mt-10">
    <div class="w-3/12">
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Blog with Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

   

    <div class="container mx-auto p-4 flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md rounded-lg p-4">
            <h2 class="text-xl font-bold mb-4">Categories</h2>
            <ul>
                <li class="mb-2"><a href="#" class="text-blue-600 hover:underline">Category 1</a></li>
                <li class="mb-2"><a href="#" class="text-blue-600 hover:underline">Category 2</a></li>
                <li class="mb-2"><a href="#" class="text-blue-600 hover:underline">Category 3</a></li>
                <li class="mb-2"><a href="#" class="text-blue-600 hover:underline">Category 4</a></li>
                <li class="mb-2"><a href="#" class="text-blue-600 hover:underline">Category 5</a></li>
            </ul>
        </aside>

        
        
    </div>

</body>
</html>

    </div>
    <div class="w-9/12 grid grid-cols-3">
    <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
  <!-- Image -->
  <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/600x400" alt="Blog Post Image">
  
  <!-- Content -->
  <div class="p-5">
    <!-- Title -->
    <h5 class="text-xl font-bold text-gray-900 mb-2">
      Discover the Latest Trends in Tech
    </h5>

    <!-- Description -->
    <p class="text-gray-700 mb-4">
      Stay updated with the latest in tech innovations, programming trends, and cutting-edge developments. Dive deep into insights that are shaping the future.
    </p>
    
    <!-- CTA Button -->
    <a href="{{route('post.show',23456)}}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">
      Read More
    </a>
  </div>
</div>

    

    </div>
</div>
@endsection