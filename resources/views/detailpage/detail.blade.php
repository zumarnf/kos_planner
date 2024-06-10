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
<body class="h-full flex flex-col">

    <x-navbar></x-navbar>

    <main class="flex-grow">
        <div class="flex flex-row w-full h-full">
           <x-galery></x-galery>
            <div class="basis-1/3 flex flex-col justify-center items-center bg-green-100">
                <div class="w-full px-20">
                    <div class="text-2xl font-bold">
                        Kos Angsa Putih
                    </div>
                    <div class="mb-10">
                        <x-btn-detail></x-btn-detail>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function changeImage(src) {
                document.getElementById('mainImage').src = src;
            }
        </script>

    </main>
</body>
</html>
