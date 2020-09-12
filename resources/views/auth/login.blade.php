@extends('layouts.app')

@section('content')
<div class="text-center flex justify-center col-span-4" style="width: 400px">
    <div class="bg-gray-100 bg-opacity-50 rounded-lg p-6">
        <div class="mb-8 font-openSans">Ienāc savā profilā, lai apskatītu<br> un atkārtotu savus iepriekšējos pasūtījumus, kā arī saņemtu īpašus piedāvājumus</div>

        <div class="">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="font-openSans">Epasta adrese</label>

                    <div class="">
                        <input id="email" type="email" class="font-openSans p-1 w-48 outline-none" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <p class="font-openSans text-sm text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-2">
                    <label for="password" class="font-openSans">Parole</label>

                    <div class="">
                        <input id="password" type="password" class="font-openSans p-1 w-48 outline-none" name="password" required autocomplete="current-password">

                        @error('password')
                            <p class="font-openSans text-sm text-red-500" role="alert">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="mb-4">
                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="" for="remember">
                        Atcerēties mani
                    </label>
                </div>

                <div class="">
                        <button type="submit" class="p-2 bg-white border-2 border-gray-600 hover:border-black focus:outline-none focus:shadow-md rounded-lg mr-4">
                            Ienākt
                        </button>

                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
