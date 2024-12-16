        <!-- Sidebar -->
        <aside class="w-[300px] bg-white shadow-md rounded-lg p-4">
          <h2 class="text-xl font-bold mb-4">Categories</h2>
          <ul>
            @foreach($topics as $topic)
            <li>
              <a href="{{route('filter',['cat_id' =>$topic->id])}}" class="flex items-center p-3 bg-white hover:bg-blue-100 transition justify-between" wire:navigate>
                <span class="text-blue-600 text-lg font-semibold">{{$topic->topic_name}} {{$topic->posts->count() > 0 ?"(".$topic->posts->count().")": ""}}</span>
                <span><svg class="w-6 h-6 text-blue-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="blue" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                  </svg>

                </span>
              </a>
            </li>
            @endforeach

          </ul>
        </aside>