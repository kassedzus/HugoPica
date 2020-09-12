@extends('layouts.app')

@section('content')
<div class="text-center" style="width: 400px">
    <div class="bg-gray-100 bg-opacity-50 rounded-lg p-6">

        <div class="font-openSans mb-6">Uzvarētāji savu taktiku nemaina!<br> Izveido savu kontu un saglabā sevis veiktos 
            pasūtījumus, lai savas mīļākās picas varētu pasūtīt jebkurā laikā ar vienu klikšķi. 
            Kā arī reģistrētie lietotāji saņem īpašus piedāvājumus un atlaides!</div>

        <div class="">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="font-openSans">Vārds</label>

                    <div class="">
                        <input id="name" type="text" class="font-openSans p-1 w-48 outline-none" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <p class="font-openSans text-sm text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="font-openSans">Epasta adrese</label>

                    <div class="">
                        <input id="email" type="email" class="font-openSans p-1 w-48 outline-none" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <p class="font-openSans text-sm text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="phone" class="font-openSans">Telefona numurs</label>

                    <div class="">
                        <input id="phone" type="number" class="font-openSans p-1 w-48 outline-none" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
                            <p class="font-openSans text-sm text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="font-openSans">Parole</label>

                    <div class="">
                        <input id="password" type="password" class="font-openSans p-1 w-48 outline-none" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password-confirm" class="font-openSans">Parole atkārtoti</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="font-openSans p-1 w-48 outline-none" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="p-2 bg-white border-2 border-gray-600 hover:border-black focus:outline-none focus:shadow-md rounded-lg">
                            Reģistrēties
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
