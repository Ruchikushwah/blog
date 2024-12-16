<div class="w-full overflow-auto px-[8%] py-10">
    @if(session("message"))
    <p class="bg-green-700 text-white p-3 w-full">{{session('message')}}</p>
    @endif
    <div class="flex flex-1 font-semibold justify-between">
        <h2 class="text-2xl font-semibold">Manage post({{count($posts)}})</h2>
        <input type="search" wire:model.live="searchTerm" class="border px-3 py-2 rounded border-gray-400" placeholder="search here">
    </div>
    <table class="w-full border">
        <thead>
            <tr>
                <th class="border p-3">id</th>
                <th class="border p-3">title</th>
                <th class="border p-3">topic</th>
                <th class="border p-3">content</th>
                <th class="border p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)

            <tr>
                <td class="border p-3">{{$post->id}}</td>
                <td class="border p-3">{{$post->title}}</td>

                <td class="border p-3">{{$post->topic->topic_name}}</td>

                <td class="border p-3">
                    <div class="line-clamp-1 max-w-96 leading-loose">
                        {{$post->content}}
                    </div>
                </td>
                <td class="border p-3 flex gap-2">
                    <button class="bg-teal-500 text-white px-3 py-2 rounded">Edit</button>
                    <button wire:click="deletePost({{$post->id}})" class="bg-red-500 text-white px-3 py-2 rounded">Delete</button>
                    <a href="{{route('post.show',$post->id)}}" target="_blank" class="px-3 py-2 bg-green-600 text-white rounded">view post</a>
                </td>


            </tr>
            @empty
            <tr>
                <td class="border p-3 text-center">post not found</td>
            </tr>

            @endforelse


        </tbody>
    </table>
</div>