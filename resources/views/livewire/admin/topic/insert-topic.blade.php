<div>
    <form wire:submit.prevent="save" method="POST" class="bg-white shadow-md rounded-lg p-6">
        <!-- CSRF token for security -->
        
    
        <!-- Topic Title -->
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-bold mb-2">Topic Title</label>
          <input type="text" id="title" wire:model="topic_name" placeholder="Enter Topic Title"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
    
        <!-- Description -->
        <div class="mb-4">
          <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
          <textarea id="description" wire:model="topic_description" rows="4" placeholder="Enter Description"
            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
        </div>
    
        <!-- Submit Button -->
        <div>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none">
            Submit
          </button>
        </div>
      </form>
</div>