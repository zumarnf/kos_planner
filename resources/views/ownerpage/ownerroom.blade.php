<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Room</title>
</head>
<body class="h-full">
    <x-navbar></x-navbar>
    <main>
        <div class="flex w-screen h-screen bg-white-green">
            <div class="flex flex-row w-full h-full">
                <div class="basis-1/2 flex items-center bg-lg-green">
                    <div class="flex flex-col mx-20">
                        <img src="{{ asset('img/kamar4.jpg') }}" class="h-full w-full object-cover rounded-xl">
                    </div>
                </div>
                <div class="basis-1/2 flex flex-col justify-center items-center bg-white-green">
                    <div class="flex flex-row mx-24 mb-4 text-5xl font-extrabold">
                        {{ $drooms['title'] }}
                    </div>
                    <div class="flex flex-row mx-24 mb-4 text-2xl font-medium">
                        {{ $drooms['lokasi'] }}
                    </div>
                    <div class="flex justify-start flex-col">
                        <div class="flex flex-row mx-24 mb-4 text-2xl font-light">
                            Tipe Kos: {{ $drooms['tipe'] }}
                        </div>
                        <div class="flex flex-row mx-24 mb-4 text-2xl font-light">
                            Kapasitas Kamar: {{ $drooms['kapasitas'] }}
                        </div>
                    </div>
                    <div class="my-8 mx-12">
                        <a href="/ownerpage/updateroom" class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 px-10">
                            Tambah
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="grid grid-cols-4 ml-16 mr-16">
            @foreach ($rooms as $room)
                <div class="w-60 h-80 bg-white-green my-8 mx-12 p-3 flex flex-col gap-1 rounded-2xl">
                    <div class="h-48 rounded-xl">
                        <img src="{{ asset('img/kamar.jpg') }}" class="h-full w-full object-cover rounded-xl">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-black-blue">{{ $room['title'] }}</span>
                                <p class="text-xs text-gray-700">{{ $room['lokasi'] }}</p>
                            </div>
                            <span class="font-bold text-red-600">{{ $room['price'] }}</span>
                        </div>
                        <a href="/detailpage/detail/{{ $room['slug'] }}" class="hover:bg-green-gd text-gray-50 bg-black-blue py-2 rounded-md text-center">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
