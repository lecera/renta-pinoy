<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create Ads
        </h2>
        <p class="mb-4">Post an Ads</p>
    </header>

    <form method="POST" action="/listing" enctype="multipart/form-data">
        @csrf

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Category</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="category" placeholder="Example: Car, Property, Motorcycle etc." value="{{old('category')}}" />
            @error('category')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}"  />
            @error('title')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Price</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" placeholder="" value="{{old('price')}}" />
            @error('price')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Condition</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="condition" placeholder="Example: Brand New, Second Hand" value="{{old('condition')}}" />
            @error('condition')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Address</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="address" placeholder="Example: Remote, Boston MA, etc" value="{{old('address')}}"  />
            @error('address')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="contact_number" class="inline-block text-lg mb-2">Contact Number</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="contact_number" value="{{old('contact_number')}}" />
            @error('contact_number')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="image" class="inline-block text-lg mb-2">Upload Image</label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" value="{{old('image')}}"/>
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">Description</label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="Provide more information" value="{{old('description')}}"></textarea>
            @error('description')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Create Ads</button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
</x-layout>