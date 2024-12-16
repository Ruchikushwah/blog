<div class=" mx-auto px-4 py-8">
    <article class="mb-12">
        <div class="prose prose-lg flex px-10 gap-5">
            <img class=" h-96 object-cover mb-8" src="{{asset('storage/images/'.$post->featured_image)}}" alt="Post Image">


            <div class="flex gap-3 flex-col">
                <h1 class="text-4xl font-bold ">{{$post->title}}</h1>
                <p class="text-gray-600 ">Published on :{{$post->created_at}}</p>

                <p>
                    {{$post->content}}
                </p>
            </div>
        </div>
        <!-- Add more content here -->
        <section class="px-20">
            <h2 class="text-2xl font-bold mb-6">Related Posts</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Related Post 1 -->
                @foreach($related_post as $item)

                <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                    <a href="{{route('post.show',$post_id)}}">
                        <img class="w-full h-48 object-cover" src="{{asset('storage/images/'.$item->featured_image)}}" alt="Related Post 1">
                        <div class="p-5">
                            <h5 class="text-lg font-bold text-gray-900 mb-2">{{$item->title}}</h5>
                            <p class="text-gray-700 mb-4">{{$item->content}}</p>
                            <a href="/blog/ai-in-life" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200">Read More</a>
                        </div>
                    </a>
                </div>

                @endforeach


            </div>
        </section>
</div>




</div>
</article>