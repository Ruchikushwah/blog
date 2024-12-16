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



      <div class="container mx-auto px-6 flex m">
        <livewire:public.sidebar />
      </div>
    </body>

    </html>

  </div>
  <div class="w-9/12 ">
    <livewire:public.post-section />



  </div>
</div>
@endsection