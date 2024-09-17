@extends('admin.adminlayout')

@section('content')

<div class="flex flex-1">
    <div class="w-8/12">
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Topics Listing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Page Wrapper -->
  <div class="container mx-auto px-4 py-8">
  
   <livewire:admin.topic.calling.topic/>
  </div>

 
 
</body>
</html>


    </div>
    <div class="w-4/12"><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Topics</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Page Wrapper -->
  <div class="container mx-auto px-4 py-8">
    
    <!-- Page Header -->
    <header class="bg-white shadow-md p-4 rounded-lg mb-6">
      <h1 class="text-2xl font-semibold">Insert New Topic</h1>
    </header>
    
    <livewire:admin.topic.insert-topic/>
    
     
    </div>



 
 

</body>
</html>
</div>
</div>
@endsection