<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   

    <div class=" bg-red-50 p-5">

        <form class="min-w" action="{{route('admin.package.update',['package'=>$package->id])}}" method="post" id="packform" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="grid grid-cols-2 gap-3">
                <div class="col-span-1">
                    <label for="">Name</label>
                    <input class="w-full @error('name') border-2 border-red-500 @enderror" type="text" value="{{$package->name}}" name="name" required>
                    @error('name')
                    <div class=" text-red-400">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-span-1">
                    <label for="">Price</label>
                    <input class="w-full @error('price') border-2 border-red-500 @enderror" type="number" value="{{$package->price}}" name="price" required>
                    @error('name')
                    <div class=" text-red-400">{{$message}}</div>
                    @enderror
                </div>

                <div class="col-span-2">
                    <label for="">Image</label>
                    <div class="border border-black   @error('image') @enderror" >
    
                    <input class="w-full" type="file" name="image">

                    @error('image')
                    <div class=" text-red-400">{{$message}}</div>
                    @enderror
                    </div>
                </div>

                <div class="col-span-2">
                 

                    <div class="content  @error('detail') border-2 border-red-500  @enderror">
                        <label for="">Content</label>
                        <x-trix-field id="bio" name="detail" value="{!!$package->body->render()!!}"/>
                    </div>

                    @error('detail')
                    <div class=" text-red-400">{{$message}}</div>
                    @enderror
                </div>


                <div class="col-span-2 text-center">
                  
                    <button type="submit" class=" rounded-md border border-fuchsia-600 px-2.5 py-2 bg-purple-700 text-fuchsia-50" id='save'>SAVE Package</button>
                </div>
            </div>
        </form>

    </div>
</x-app-layout>
