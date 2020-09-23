@extends('layouts.app')

@section('content')
<div class="px-4 py-4 bg-gray-100 bg-opacity-75 rounded-lg">
    <h1 class="text-2xl">Izveido jaunu picu</h1>
    <form action="{{ route('pizza.store') }}" method="post">
        @csrf

        <div class="mx-4 mt-6">
            <label for="name" class="text-lg underline font-openSans mb-4">Name</label>
        <input class="w-full rounded-lg p-1 font-openSans @error('name') border-danger @enderror" id="name" name="name" rows="1" value="{{ old('name') }}"></input>
        </div>

        @error('name')
        <p class="text-danger"> {{ $errors->first('name') }}</p>
        @enderror

        <div class="mt-2 mx-4 mb-2">
            <label for="category" class="text-lg underline font-openSans mb-4">Category</label>
            <select class="p-1 rounded-lg w-full font-openSans" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option class="font-openSans" value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="my-2 mx-4">
            <h2 class="text-lg my-4 underline font-openSans">Sastāvdaļas</h2>
            <h3 class="my-4 text-lg font-openSans font-bold">Gaļa</h3>
            @foreach ($ingredients->where('category', 'gaļa') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="my-4 text-lg font-openSans font-bold">Siers</h3>
            @foreach ($ingredients->where('category', 'siers') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="my-4 text-lg font-openSans font-bold">Dārzeņi</h3>
            @foreach ($ingredients->where('category', 'dārzeņi') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="my-4 text-lg font-openSans font-bold">Augļi</h3>
            @foreach ($ingredients->where('category', 'augļi') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="my-4 text-lg font-openSans font-bold">Garšvielas</h3>
            @foreach ($ingredients->where('category', 'garšvielas') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
            <h3 class="my-4 text-lg font-openSans font-bold">Mērces</h3>
            @foreach ($ingredients->where('category', 'mērces') as $ingredient)
                <input type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}">
                <label class="text-gray-800 font-openSans" for="ingredient">{{ $ingredient->name }}</label>
            @endforeach
            <hr>
        </div>

        <div class="mt-6 mx-4 mb-2">
            <label for="price" class="font-openSans">Price</label>
        <input class="w-full rounded-lg font-openSans p-1 @error('price') border-danger @enderror" id="price" name="price" rows="1" value="{{ old('price') }}"></input>
        </div>

        <input class="mt-4 mx-4 rounded-lg px-2 py-1 font-openSans bg-yellow-400 hover:bg-yellow-500 hover:shadow-lg" type="submit" value="Submit">
    </form>
</div>
@endsection