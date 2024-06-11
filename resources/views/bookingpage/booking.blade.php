<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Booking</title>
</head>
<body class="h-full flex flex-col">

    <x-navbar></x-navbar>

    <main>
    <div class="bg-lg-green w-512 mx-auto h-auto border-2 border-grey-gd rounded-xl p-8 m-4">
        <div class="flex flex-row">
            <div class="basis-1/2 flex flex-col justify-start">
                <div class="mb-4">
                    <label for="nomor" class="block text-grey-gh font-medium mb-2">Berapa Bulan</label>
                    <input type="number" id="nomor" placeholder="Berapa bulan" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-grey-gh font-medium mb-2">Tanggal Pemesanan</label>
                    <input type="date" id="tanggal" placeholder="Tanggal Pemesanan" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                </div>

            </div>
            <div class="basis-1/2 flex flex-col">
                @if ($rooms)
                <div class="flex items-start justify-start mx-24">
                    <div class="text-2xl font-bold mb-4 ">
                        {{ $rooms['title'] }}
                    </div>
                </div>
                <div class="flex items-start justify-start mx-24 mb-44">
                    <div class="text-xl font-bold">
                        Harga: {{ $rooms['price'] }}
                    </div>
                </div>
                <div class="flex justify-center items-center">
                    <button type="submit" class="bg-black-gd w-full md:w-64 py-2 text-white-green my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 px-36 md:px-12">Pay</button>
                </div>
                @else
                <p>Data tidak ditemukan</p>
                @endif
            </div>
        </div>

    </div>
    </main>

</body>
</html>
