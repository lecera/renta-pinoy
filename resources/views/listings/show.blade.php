
@include('partials/_search')

<x-layout>

<a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
<div class="mx-4">
    <x-card class="p-5">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/no-image.png')}}"
                alt="image"
            />

            <h3 class="text-2xl mb-2">{{$listing->title}}</h3>
            <div class="text-xl font-bold mb-4">{{$listing->price}}</div>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->address}}
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Description
                </h3>
                <div class="text-lg space-y-6">
                    {{$listing->description}}

                    <a
                        href=""
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Owner</a
                    >

                    <a href="" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a>
                </div>
            </div>
        </div>
    </x-card>
</div>

</x-layout>