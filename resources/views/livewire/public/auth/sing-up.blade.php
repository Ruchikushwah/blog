<div class="flex flex-1 justify-center items-center  h-[80vh]">
    <div class="w-4/12">
        <div class="border p-5 rounded-lg border-blue-300 shadow-lg">
            <form wire:submit="store" class="gap-3 flex flex-col ">
                <h2 class="text-3xl font-semibold">Create an account</h2>
                <div class="mb-3">
                    <label for="">FullName</label>
                    <input type="text" wire:model="name" class="border w-full px-3 py-2 rounded">
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">email</label>
                    <input type="text" wire:model="email" class="border w-full px-3 py-2 rounded">
                    @error('email')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">password</label>
                    <input type="password" wire:model="password" class="border w-full px-3 py-2 rounded">
                    @error('password')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-1 justify-end">
                    <input type="submit" class="bg-teal-600 text-white px-3 py-2 rounded self-end" value="create an account">
                </div>
            </form>
        </div>

    </div>
</div>