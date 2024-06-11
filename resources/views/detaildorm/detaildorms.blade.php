<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Dorm</title>
</head>
<body class="h-full">
    <x-navbar></x-navbar>
    <main>
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
