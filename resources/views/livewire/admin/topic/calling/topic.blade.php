<div>


    <header class="bg-white shadow-md p-4 rounded-lg mb-6 flex flex-1 justify-between items-center">
        <h1 class="text-2xl font-semibold">Manage Topics</h1>
        <input type="text" placeholder="search here..." wire:model.blur="search" class=" px-3 py-2 rounded border">

    </header>

    <div class="bg-white p-6 rounded-lg shadow-md ">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">id</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Title</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Description</th>
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Actions</th>
                </tr>
            </thead>
            <tbody id="topicsTableBody">
                @foreach($topics as $topic)
                <tr>

                    <td class="px-4 py-2 text-gray-700">{{$topic->id}}</td>
                    <td class="px-4 py-2 text-gray-700">{{$topic->topic_name}}</td>
                    <td class="px-4 py-2 text-gray-600">{{$topic->topic_description}}</td>
                    <td class="px-4 py-2">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">Edit</button>
                        <button
                        wire:comfirm="are you sure to deleted this topic"
                         wire:click="deleteTopic({{$topic->id}})" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Delete</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>