@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Filter Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Page Layout -->
  <div class="container mx-auto px-4 py-8 flex">
    
    <!-- Sidebar for Filters -->
    <aside class="w-64 bg-white p-4 rounded-lg shadow-md mr-8">
      <h2 class="text-xl font-semibold mb-4">Filters</h2>
      
      <!-- Categories Filter -->
      <div class="mb-6">
        <h3 class="text-lg font-medium">Categories</h3>
        <ul class="mt-2">
          <li><input type="checkbox" id="tech" class="mr-2"> <label for="tech">Technology</label></li>
          <li><input type="checkbox" id="business" class="mr-2"> <label for="business">Business</label></li>
          <li><input type="checkbox" id="health" class="mr-2"> <label for="health">Health & Fitness</label></li>
          <li><input type="checkbox" id="lifestyle" class="mr-2"> <label for="lifestyle">Lifestyle</label></li>
          <li><input type="checkbox" id="entertainment" class="mr-2"> <label for="entertainment">Entertainment</label></li>
        </ul>
      </div>

      <!-- Date Filter -->
      <div class="mb-6">
        <h3 class="text-lg font-medium">Date Posted</h3>
        <select class="w-full mt-2 p-2 border border-gray-300 rounded-md">
          <option>All Dates</option>
          <option>Last 24 hours</option>
          <option>Last 7 days</option>
          <option>Last 30 days</option>
        </select>
      </div>

      <!-- Tags Filter -->
      <div class="mb-6">
        <h3 class="text-lg font-medium">Tags</h3>
        <ul class="mt-2">
          <li><input type="checkbox" id="ai" class="mr-2"> <label for="ai">Artificial Intelligence</label></li>
          <li><input type="checkbox" id="blockchain" class="mr-2"> <label for="blockchain">Blockchain</label></li>
          <li><input type="checkbox" id="marketing" class="mr-2"> <label for="marketing">Marketing</label></li>
          <li><input type="checkbox" id="nutrition" class="mr-2"> <label for="nutrition">Nutrition</label></li>
        </ul>
      </div>

      <!-- Price Range Filter (for e-commerce) -->
      <div class="mb-6">
        <h3 class="text-lg font-medium">Price Range</h3>
        <div class="mt-2">
          <input type="range" min="0" max="1000" value="500" class="w-full slider" id="priceRange">
          <p class="mt-2 text-sm text-gray-700">Price: <span id="priceValue">$500</span></p>
        </div>
      </div>

      <!-- Apply Filters Button -->
      <button class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Apply Filters</button>
    </aside>

    <!-- Main Content -->
    <main class="flex-1">
      <h1 class="text-2xl font-semibold mb-6">Search Results</h1>

      <!-- Example Blog Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Example Blog Card 1 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h2 class="text-lg font-bold mb-2">Top 10 AI Trends in 2024</h2>
          <p class="text-gray-700 mb-4">Stay updated with the latest AI trends in the upcoming year.</p>
          <a href="#" class="text-blue-600 hover:text-blue-700">Read more</a>
        </div>

        <!-- Example Blog Card 2 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h2 class="text-lg font-bold mb-2">Blockchain in Business: What You Need to Know</h2>
          <p class="text-gray-700 mb-4">A comprehensive guide on how blockchain is transforming industries.</p>
          <a href="#" class="text-blue-600 hover:text-blue-700">Read more</a>
        </div>

        <!-- Example Blog Card 3 -->
        <div class="bg-white p-4 rounded-lg shadow-md">
          <h2 class="text-lg font-bold mb-2">10 Ways to Improve Your Mental Health</h2>
          <p class="text-gray-700 mb-4">Practical tips to help you maintain a healthy mind in today's world.</p>
          <a href="#" class="text-blue-600 hover:text-blue-700">Read more</a>
        </div>

        <!-- Add more content as needed -->

      </div>
    </main>
  </div>

  <!-- Script for Price Range Display -->
  <script>
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');

    priceRange.addEventListener('input', function() {
      priceValue.textContent = '$' + priceRange.value;
    });
  </script>

</body>
</html>

@endsection