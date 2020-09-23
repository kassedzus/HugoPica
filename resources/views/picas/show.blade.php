@extends('layouts.app')

@section('content')
    
@if (session('success'))
    <div class="alert alert-success font-openSans block">
        {{ session('success') }}
    </div>
@endif

<div class="grid grid-cols-3 bg-gray-100 bg-opacity-50 rounded-lg p-6 shadow">
    <div class="col-span-1 p-2">
        <img class="rounded-full border-8 border-white" src="https://loremflickr.com/300/300/pizza,food,delicious?lock={{ $pizza->id }}" alt="Picas bilde">
    </div>
    <div class="col-span-1 p-2 ml-2 ">
        <h1 class=" text-4xl">{{ $pizza->name }}</h1>
        <div class="flex justify-between">
            <a href="/picas?category={{ $pizza->category->id }}"><h2 class="mb-4 text-sm font-openSans">{{ $pizza->category->name }}</h2></a>
            <p class="text-2xl">&euro; {{ $pizza->price }}</p>
        </div>
        <div class="">
            <p class="mb-2 text-lg font-openSans underline">Sastāvdaļas:</p>
            @forelse ($pizza->ingredients as $ingredient)
            <div class="flex">
                <i class="fas fa-circle mr-2" style="align-self: center"></i><a href="/picas?ingredient={{$ingredient->name}}" class="font-openSans"><p>{{ $ingredient->name }}</p></a>
            </div>
            @empty
                <p class="font-openSans">Diemžēl sastāvdaļas šai picai nav pieejamas.</p>
            @endforelse
        </div>

    </div>
    <div class="col-span-1" style="
    place-self: center">
        <a href="/pievienot-grozam/{{ $pizza->id }}"><button type="submit" class="rounded-lg bg-orange-400 hover:bg-orange-500 p-4 text-white shadow"><span style="text-shadow: 1px 1px 2px black">PIEVIENOT GROZAM</span></button></a>
    </div>
</div>

@endsection