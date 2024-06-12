<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Home</title>
</head>

<body class="h-full">
    <x-navbar></x-navbar>
    <main>
        <div class="relative w-full bg-cover bg-center py-36 sm:px-6 lg:px-8" style="background-image: url(img/kamar.jpg)">
            <div class="opacity-65 absolute inset-0 bg-white-green"></div>
            <div class="relative z-10 mx-32 flex items-center justify-between">
                <div>
                    <h2 class="text-5xl font-bold text-black-blue">Cari Kos</h2>
                    <h2 class="text-6xl font-bold text-green-gd">Lebih Mudah</h2>
                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari Kos" class="rounded-2xl py-4 pl-10 pr-24 focus:outline-none focus:ring-1 focus:ring-green-gd">
                </div>
            </div>
        </div>
        <div class="ml-16 mr-16 grid grid-cols-4">
            @foreach ($dorms as $dorm)
                <div class="mx-12 my-8 flex h-80 w-60 flex-col gap-1 rounded-2xl bg-white-green p-3">
                    <div class="h-48 rounded-xl">
                        <img src="{{ asset('img/kamar.jpg') }}" class="h-full w-full rounded-xl object-cover">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-black-blue">{{ $dorm['title'] }}</span>
                                <p class="text-xs text-gray-700">{{ $dorm['lokasi'] }}</p>
                            </div>
                        </div>
                        <a href="detaildorm/detaildorms/{{ $dorm['slug'] }}"
                            class="rounded-md bg-black-blue py-2 text-center text-gray-50 hover:bg-green-gd">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    <x-alert />
</body>

</html>
