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
        <div class="flex flex-row justify-between">
            <div class="text-4xl font-extrabold my-8 mx-12">Daftar Kos</div>
            <div class="my-8 mx-12">
                <a href="/ownerpage/updatedorm" class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 px-10">
                    Tambah
                </a>
            </div>
        </div>

        <div class="grid grid-cols-4 ml-10 mr-10">
            @foreach ($dorms as $dorm)
                <div class="w-60 h-80 bg-white-green my-8 mx-12 p-3 flex flex-col gap-1 rounded-2xl">
                    <div class="h-48 rounded-xl">
                        <img src="{{ asset($dorm['gambar']) }}" class="h-full w-full object-cover rounded-xl">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-black-blue">{{ $dorm['title'] }}</span>
                                <p class="text-xs text-gray-700">{{ $dorm['lokasi'] }}</p>
                            </div>
                            <span class="font-bold text-red-600">{{ $dorm['lokasi'] }}</span>
                        </div>
                        <a href="/ownerroom/{{ $dorm['slug'] }}" class="hover:bg-green-gd text-gray-50 bg-black-blue py-2 rounded-md text-center">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
