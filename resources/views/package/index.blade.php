<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-12 gap-4 p-4">
        @foreach ($packages as $item)
        <div class="col-span-4">
            <div class="card">
                <div class="price-box">
                    <div>Price</div>
                    <div>{{$item->price}}</div>
                    <div>BDT</div>
                </div>
                <img class="rounded" src="{{asset($item->image)}}" alt="" srcset="">

                <h5 class="mb-2 text-center text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->name}}</h5>

                <div class="text-center pt-3 border-t-2 border-spacing-1 border-fuchsia-400 rounded-full flex justify-center">
                    <a href="{{route('admin.package.edit',['package'=>$item->id])}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg
                    hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 
                    dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex items-center mr-2">
                    <svg class="w-4 h-4 text-rose-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.013 7.962a3.519 3.519 0 0 0-4.975 0l-3.554 3.554a3.518 3.518 0 0 0 4.975 4.975l.461-.46m-.461-4.515a3.518 3.518 0 0 0 4.975 0l3.553-3.554a3.518 3.518 0 0 0-4.974-4.975L10.3 3.7"/>
                     </svg>
                    <span class="ml-2">Edit</span></a>

                    <a href="{{route('package.show',['package'=>$item->id])}}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg
                     hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 
                     dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex items-center">
                     <svg class="w-4 h-4 text-rose-300 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 19">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.013 7.962a3.519 3.519 0 0 0-4.975 0l-3.554 3.554a3.518 3.518 0 0 0 4.975 4.975l.461-.46m-.461-4.515a3.518 3.518 0 0 0 4.975 0l3.553-3.554a3.518 3.518 0 0 0-4.974-4.975L10.3 3.7"/>
                      </svg>
                     <span class="ml-2">View Details</span></a>

                     <form action="{{route('admin.package.destroy',['package'=>$item->id])}}" method="post">
                        @method('DELETE')

                        @csrf
                        
                        <button class="px-3 py-2 text-xs font-medium text-center text-white bg-orange-600 rounded-lg
                            hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 
                            dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex items-center mr-2 ml-2">
                            
                            <span>DELETE</span></button>

                    </form>


                </div>
              
            </div>
        </div>
        @endforeach
        
       
      </div>
</x-app-layout>
