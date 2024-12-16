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
  <div class="container mx-auto px-4 py-8 flex gap-5">
    <livewire:public.sidebar/>

    <!-- Main Content -->
    <main class="flex-1">
      <h1 class="text-2xl font-semibold mb-6">Search Results found "{{$topic->topic_name}}"</h1>

      <!-- Example Blog Cards -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($topic->posts as $post)
        <div class="bg-white p-4 rounded-lg shadow-md">
          <img src="{{asset('storage/images/'.$post->featured_image)}}" alt="">
          <div>
            <h2 class="text-lg font-bold mb-2 truncate">{{$post->title}}</h2>
            <p class="text-gray-700 mb-4 line-clamp-3">{{$post->content}}</p>
            <a wire:navigate href="{{route('post.show',$post->id)}}" class="text-blue-600 hover:text-blue-700">Read more</a>
          </div>
        </div>

        @empty
        <p class="text-2xl">Not found any post</p>
        @endforelse
        <!-- Example Blog Card 1 -->



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