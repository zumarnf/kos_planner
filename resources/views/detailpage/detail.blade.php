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

<body class="flex h-full flex-col">

    <x-navbar></x-navbar>

    <main class="flex-grow">
        <div class="flex h-full w-full flex-row">
            <x-galery></x-galery>
            <div class="flex basis-1/3 flex-col items-center justify-center bg-green-100">
                <div class="w-full px-20">
                    <div class="text-2xl font-bold">
                        {{ $detail['title'] }}
                    </div>
                    <div class="text-lg font-light">
                        {{ $detail['lokasi'] }}
                    </div>
                    <div>
                        <div class="my-5 text-xl font-medium">
                            Fasilitas
                        </div>
                        <ul class="mb-3 ml-4 list-outside list-disc">
                            <li>
                                Wifi
                            </li>
                        </ul>
                        <div class="text-lg font-light">
                            {{ $detail['body'] }}
                        </div>
                        <div class="text-2xl font-bold">
                            Harga : {{ $detail['price'] }}
                        </div>
                    </div>
                    <div class="mb-10 mt-10">
                        <x-btn-detail :slug="$detail['slug']"></x-btn-detail>
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
