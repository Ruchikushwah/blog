
<div class="w-5/12 mx-auto  mt-10 p-10 shadow-lg border-2 border-blue-400">
    
<h2 class="text-3xl font-semibold  flex p-5 justify-center">Insert Post</h2>
    <form wire:submit.prevent="store" enctype="multipart/form-data" class="space-y-6">
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input wire:model="title" type="text" id="title" class=" px-3 py-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea wire:model="content" id="content" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            @error('content') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

       

        <div>
            <label for="topic_id" class="block text-sm font-medium text-gray-700">Topic</label>
            <select wire:model="topic_id" id="topic_id" class="bg-white border-gray-300 hover:border-gray-600 w-full px-3 py-2">
                @foreach($topics as $topic)
                <option value="{{$topic->id}}">{{$topic->topic_name}}</option>
                @endforeach
            </select>
           
            @error('topic_id') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="featured_image" class="block text-sm font-medium text-gray-700">Featured Image</label>
            <input wire:model.live="featured_image" type="file" id="featured_image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            @error('featured_image') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        @if($featured_image)
        <img src="{{$featured_image->temporaryUrl()}}" alt="">
        @endif

        
        <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
        </button>
    </form>
</div>

   
