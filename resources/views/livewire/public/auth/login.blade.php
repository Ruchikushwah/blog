<div class="flex flex-1 justify-center items-center  h-[80vh]">
    <div class="w-4/12">
        <div class="border p-5 rounded-lg border-blue-300 shadow-lg">
            <form wire:submit="login" class="gap-3 flex flex-col ">
                <h2 class="text-3xl font-semibold">Login here..</h2>
                <a href="{{route('google.login') }}" class="flex items-center justify-center px-4 py-2 bg-white border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <img src="storage/google.svg" class="w-7 h-7">
                    <span>Sign in with Google</span>
                </a>
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
                    <input type="submit" class="bg-teal-600 text-white px-3 py-2 rounded self-end" value="login here">
                </div>
            </form>
        </div>
        @session('error')
        <p class="text-red-600 text-xl font-semibold">{{session('error')}}</p>
        @endsession

    </div>
</div>