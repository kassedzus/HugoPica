@extends('layouts.app')

@section('content')
    <div class="px-4">
        @if (request('ingredient'))
            <h1 class="text-2xl">Visas picas ar sastāvdaļām: {{request('ingredient')}}</h1>
        @elseif (request('category'))
            <h1 class="text-2xl">Visas {{request('category')}} picas</h1>
        @else 
           <h1 class="text-2xl">Visas picas</h1>
        @endif
        <hr class="my-2">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4">
            @forelse ($pizzas as $pizza)
                <div class="bg-gray-100 bg-opacity-50 p-2 rounded-lg transition duration-300 ease-in-out shadow transform hover:scale-105">
                    <img class="rounded-lg" src="https://loremflickr.com/200/200/pizza,food,delicious?lock={{ $pizza->id }}" alt="Pizza image">
                    <a class="hover:text-orange-400 hover:no-underline" href="{{ route('pizza.show', $pizza) }}"><span class="mt-6 text-2xl ">{{ $pizza->name}}</span></a>
                    <div class="flex justify-between">
                        <a href="picas?category={{$pizza->category}}" class="block text-sm text-black font-openSans">{{ $pizza->category }}</a>
                        <p>&euro; {{ $pizza->price }}</p>
                    </div>
                </div>
            @empty
                <p>Visas picas ir apēstas :(</p> 
            @endforelse
        </div>
    </div>
@endsection