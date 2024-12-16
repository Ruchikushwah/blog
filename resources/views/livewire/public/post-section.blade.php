<div class="grid grid-cols-3  gap-3">
    @forelse($posts as $post)
   
        <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <!-- Image -->
            <a href="{{route('post.show',$post->id)}}">
            <img class="w-full h-48 object-cover" src="{{asset('storage/images/'.$post->featured_image)}}" alt="Blog Post Image">

            <!-- Content -->
            <div class="p-5">
                <!-- Title -->
                <h5 class="text-xl font-bold text-gray-900 mb-2">
                    {{$post->title}}
                </h5>

                <!-- Description -->
                <p class="text-gray-700 mb-4">
                    {{$post->content}}
                </p>
</a>
            </div>
    
</div>

@empty
<p>not found</p>

@endforelse
</div>