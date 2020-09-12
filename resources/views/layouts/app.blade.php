<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    {{-- <script src="/js/app.js"></script> --}}
    <title>Hugo Pica</title>
</head>
<body class="font-pangolin" style="background-image: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 10%, rgba(255,255,255,0.3) 50%, rgba(0,0,0,0.3) 75%, rgba(0,0,0,1) 100%), url('/images/pizzabg2.jpg')">
    <header>
        <nav class="flex items-center justify-between">
            <div class="flex items-center">
                <a href="/" class="p-6 flex items-center mr-6">
                <img src="/images/pizza (1).png" class="" alt="Logo">
                <div class="text-center ml-2">
                    <h1>HUGO</h1>
                    <h2>PICA</h2>
                </div>
                </a>
                <a href="/picas" class="hover:underline">Picas</a>
                <a href="/piedavajumi" class="mx-6 hover:underline">Īpašie piedāvājumi</a>
                <a href="/parmums" class="mr-6 hover:underline">Par mums</a>
                <a href="/kontakti" class="hover:underline">Kontakti</a>
            </div>
            <div class="flex mr-10 items-center">
                @auth
                    <span class="mr-6">Sveiki, {{ Auth::user()->name }}</span>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="mr-6 p-2 border-2 border-gray-500 rounded-lg hover:border-black focus:outline-none focus:shadow-outline">Iziet</button>
                    </form>
                @else
                    <a href="/login"><button class="mr-4 p-2 border-2 border-gray-500 rounded-lg hover:border-black focus:outline-none focus:shadow-outline">Ienākt</button></a>
                    <a href="/register"><button class="mr-4 p-2 border-2 border-gray-500 rounded-lg hover:border-black bg-gray-100 hover:bg-gray-300 focus:outline-none focus:shadow-outline">Reģistrēties</button></a>
                @endauth
                {{-- <a href="/login"><button class="mr-4 p-2 border-2 border-gray-500 rounded-lg hover:border-black focus:outline-none focus:shadow-outline">Ienākt</button></a>
                <a href="/register"><button class="mr-4 p-2 border-2 border-gray-500 rounded-lg hover:border-black bg-gray-100 hover:bg-gray-300 focus:outline-none focus:shadow-outline">Reģistrēties</button></a> --}}
                <a href="/grozs"><img src="/images/basket.svg" class="h-10" alt="Iepirkumu grozs"></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="grid lg:grid-cols-6 md:grid-cols-4 sm:grid-cols-1" style="">
            <div class="flex lg:col-span-1 md:col-span-1 p-2 justify-center">
                @include('sidebars.left')
            </div>

            <div class="lg:col-span-4 md:col-span-2 sm:col-span-1 p-2" style="height: fit-content">
                @yield('content')
            </div>

            <div class="flex lg:col-span-1 md:col-span-1 p-2 justify-center">
                @include('sidebars.right')
            </div>
        </div>
    </main>
    <footer class="">
        <div class="grid grid-cols-4 gap-2 p-4 mx-6">
            <div class="col-span-1 flex flex-col">
                <h1 class="text-2xl mb-4 text-white" style="text-shadow: 2px 2px 2px black">Hugo Pica</h1>
                <a href="#" class="text-white mb-2" style="text-shadow: 2px 2px 2px black"><i class="far fa-address-card mr-2"></i></i>Par mums</a>
                <a href="#" class="text-white mb-2" style="text-shadow: 2px 2px 2px black"><i class="fas fa-pizza-slice mr-2"></i>Picas</a>
                <a href="#" class="text-white mb-2" style="text-shadow: 2px 2px 2px black"><i class="far fa-star mr-2"></i>Īpašie piedāvājumi</a>
                <a href="#" class="text-white mb-2" style="text-shadow: 2px 2px 2px black"><i class="fas fa-home mr-2"></i>Kontakti</a>
            </div>
            <div class="col-span-1 flex flex-col">
                <h1 class=" text-2xl mb-4 text-white" style="text-shadow: 2px 2px 2px black">Svarīgi</h1>
                <a href="#" class="text-white mb-2" style="text-shadow: 2px 2px 2px black"><i class="fas fa-car-side mr-2"></i>Piegāde</a>
                <a href="#" class="text-white" style="text-shadow: 2px 2px 2px black"><i class="fas fa-file-contract mr-2"></i>Noteikumi</a>
            </div>
            <div class="col-span-1">
                <h1 class="text-2xl mb-4 text-white" style="text-shadow: 2px 2px 2px black">Pieseko</h1>
                <div class="flex">
                    <a href="#" class="text-white" style="text-shadow: 2px 2px 2px black"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white mx-3" style="text-shadow: 2px 2px 2px black"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white" style="text-shadow: 2px 2px 2px black"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-span-1">

            </div>
        </div>
    </footer>
    
    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    {{-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script> --}}
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>