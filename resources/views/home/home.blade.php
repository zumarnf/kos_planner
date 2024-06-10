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
        <div class="relative w-full py-36 sm:px-6 lg:px-8 bg-cover bg-center" style="background-image: url(img/kamar.jpg)">
          <div class="absolute inset-0 bg-white-green opacity-65"></div>
          <div class="relative z-10 mx-32 flex justify-between items-center">
                <div>
                    <h2 class="text-5xl font-bold text-black-blue">Cari Kos</h2>
                    <h2 class="text-6xl font-bold text-green-gd">Lebih Mudah</h2>

                </div>
                <div class="relative">
                    <input type="text" placeholder="Cari Kos" class="py-4 pl-10 pr-24 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-gd">
                </div>
            </div>
        </div>
        <x-cards></x-cards>

      </main>


</body>
</html>
