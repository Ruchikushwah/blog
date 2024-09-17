@extends('layout')
@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
  <!-- Blog Post -->
  <article class="mb-12">
    <h1 class="text-4xl font-bold mb-4">The Future of Technology and Innovation</h1>
    <p class="text-gray-600 mb-8">Published on September 12, 2024</p>
    
    <img class="w-full h-96 object-cover mb-8" src="https://source.unsplash.com/random/800x600" alt="Post Image">
    
    <div class="prose prose-lg">
      <p>
        In today's rapidly evolving world, technology is the driving force behind many of the innovations that define modern society. From artificial intelligence to advancements in renewable energy, we're witnessing unprecedented changes.
      </p>
      <p>
        As we look ahead, the possibilities for further growth and development are limitless. This post will explore some of the most exciting tech trends that are expected to shape our future.
      </p>
      <!-- Add more content here -->
    </div>
  </article>
  
  <!-- Related Posts Section -->
  <section>
    <h2 class="text-2xl font-bold mb-6">Related Posts</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Related Post 1 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/600x400?tech" alt="Related Post 1">
        <div class="p-5">
          <h5 class="text-lg font-bold text-gray-900 mb-2">Exploring AI in Everyday Life</h5>
          <p class="text-gray-700 mb-4">Artificial Intelligence is changing the way we interact with technology. Learn how AI is being used in everyday life.</p>
          <a href="/blog/ai-in-life" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">Read More</a>
        </div>
      </div>

      <!-- Related Post 2 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/600x400?innovation" alt="Related Post 2">
        <div class="p-5">
          <h5 class="text-lg font-bold text-gray-900 mb-2">The Impact of Renewable Energy</h5>
          <p class="text-gray-700 mb-4">Discover how renewable energy sources like solar and wind are transforming the global energy landscape.</p>
          <a href="/blog/renewable-energy" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">Read More</a>
        </div>
      </div>

      <!-- Related Post 3 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
        <img class="w-full h-48 object-cover" src="https://source.unsplash.com/random/600x400?future" alt="Related Post 3">
        <div class="p-5">
          <h5 class="text-lg font-bold text-gray-900 mb-2">The Future of Robotics</h5>
          <p class="text-gray-700 mb-4">Robotics is advancing quickly, changing industries and everyday life. What does the future hold for robotics?</p>
          <a href="/blog/future-of-robotics" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">Read More</a>
        </div>
      </div>
    </div>
  </section>
</div>



@endsection