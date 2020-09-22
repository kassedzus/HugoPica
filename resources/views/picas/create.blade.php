@extends('layouts.app')

@section('content')
<div class="px-4 py-4 bg-gray-100 bg-opacity-50 rounded-lg">
    <h1 class="text-2xl">Izveido jaunu picu</h1>
    <form action="{{ route('pizza.store') }}" method="post">
        @csrf

        <div class="mt-6 mx-4 mb-2">
            <label for="name">Name</label>
        <input class="w-full rounded-lg p-1 @error('name') border-danger @enderror" id="name" name="name" rows="1" value="{{ old('name') }}"></input>
        </div>

        @error('name')
        <p class="text-danger"> {{ $errors->first('name') }}</p>
        @enderror

        <div class="mt-2 mx-4 mb-2">
            <label for="category">Category</label>
            <select class="p-1 rounded-lg w-full" name="category" id="category">
                @foreach ($categories as $category)
                    <option class="" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="my-2 mx-4">
            <h2 class="text-lg my-4 underline">Sastāvdaļas</h2>
            <h3 class="mb-2 text-lg">Gaļa</h3>
            @foreach ($ingredients->where('category', 'gaļa') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="mb-2 text-lg">Siers</h3>
            @foreach ($ingredients->where('category', 'siers') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="mb-2 text-lg">Dārzeņi</h3>
            @foreach ($ingredients->where('category', 'dārzeņi') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="mb-2 text-lg">Augļi</h3>
            @foreach ($ingredients->where('category', 'augļi') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="mb-2 text-lg">Garšvielas</h3>
            @foreach ($ingredients->where('category', 'garšvielas') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="mb-2 text-lg">Mērces</h3>
            @foreach ($ingredients->where('category', 'mērces') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
        </div>

        <div class="mt-6 mx-4 mb-2">
            <label for="price">Price</label>
        <input class="w-full rounded-lg p-1 @error('price') border-danger @enderror" id="price" name="price" rows="1" value="{{ old('price') }}"></input>
        </div>

        <input class="mt-4 mx-4 rounded-lg px-2 py-1 bg-yellow-400 hover:bg-yellow-500 hover:shadow-lg" type="submit" value="Submit">
    </form>
</div>
@endsection