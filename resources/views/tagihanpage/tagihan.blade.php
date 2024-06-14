<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Tagihan</title>
</head>

<body class="flex h-full flex-col">

    <x-navbar></x-navbar>

    <main>
        <div class="m-4 mx-auto h-auto w-512 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
            <div class="my-8 text-5xl font-extrabold">INVOICES</div>
            <div class="flex flex-row">
                <div class="flex basis-1/2 flex-col justify-start">
                    <div class="mb-4">
                        <label for="bulan" class="mb-2 block font-medium text-grey-gh">Berapa Bulan</label>
                        <input type="number" id="bulan" value="{{ session('bulan') }}" disabled
                            class="w-full rounded-md py-2 pl-4 pr-12 outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="tanggal" class="mb-2 block font-medium text-grey-gh">Tanggal Pemesanan</label>
                        <input type="date" id="tanggal" value="{{ session('tanggal') }}" disabled
                            class="w-full rounded-md py-2 pl-4 pr-12 outline-none ring-1 ring-grey-gh">
                    </div>
                </div>
                <div class="flex basis-1/2 flex-col">
                    @if (session('rooms'))
                        <div class="mx-24 flex items-start justify-start">
                            <div class="mb-4 text-2xl font-bold">
                                {{ session('rooms')['title'] }}
                            </div>
                        </div>
                        <div class="mx-24 mb-44 flex items-start justify-start">
                            <div class="text-xl font-bold">
                                Total Harga: {{ session('totalHarga') }}
                            </div>
                        </div>
                        <div class="flex items-center justify-center">
                            <button type="submit"
                                class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12"
                                href="/history">Pay</button>
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
