<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-sky-400 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center text-center p-4">
            <!-- Logo -->
            <div class="text-2xl font-bold">
                <a href="/" class="hover:text-gray-200">EduBlog</a>
            </div>
            
            <!-- Navigation Links -->
            <nav>
                <ul class="flex space-x-6 items-center">
                    <li><a href="/" class="hover:text-gray-200">Home</a></li>
                    <li><a href="#" class="hover:text-gray-200">About</a></li>
                    <li><a href="#" class="hover:text-gray-200">Courses</a></li>
                    <li><a href="#" class="hover:text-gray-200">Contact</a></li>
                   @guest
                   <a href="{{route('singup')}}" class="shadow-lg  font-semibold px-3 py-2  rounded ">Signup</a>
                   <a href="{{route('login')}}" class="shadow-lg  font-semibold px-3 py-2  rounded ">Login</a>
                   @endguest
                   @auth
                   <div class="flex items-center gap-2">
                   <h2 class="font-semibold ">{{auth()->user()->name}}</h2>
                   <a href="{{route('logout')}}" class="shadow-lg  font-semibold px-3 py-2 bg-red-600  rounded ">Logout</a>
                   
                   </div>
                   @endauth
                </ul>
            </nav>
        </div>
    </header>

</body>
</html>
