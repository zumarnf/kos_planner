<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>History</title>
</head>

<body class="h-full">
    <x-navbar></x-navbar>
    <div class="min-h-full">
        <main class="flex h-screen bg-white-green">
            <div class="flex flex-row w-full h-full">
                <div class="basis-1/3 flex flex-col bg-lg-green">
                    <div class="flex justify-between items-start py-4 px-6"> <!-- Adjusted here -->
                        <div class="flex flex-col">
                            <div class="flex flex-col text-5xl font-extrabold mb-28 mt-8 mx-8">Profile</div>
                            <div class="ml-28 text-4xl font-semibold mb-6">
                                Zumar
                            </div>
                            <div class="ml-28 text-lg font-light mb-2">
                                Laki-Laki
                            </div>
                            <div class="ml-28 text-lg font-light mb-2">
                                wwwww@gmail.com
                            </div>
                            <div class="ml-28 text-lg font-light mb-10">
                                01347293472
                            </div>
                            <div class="ml-28 mt-10">
                                <a href="#"
                                    class="bg-black-gd py-2 text-white-green w-full flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0"
                                    style="width: 200px;">
                                    Choose Owner?
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="basis-2/3 flex flex-col justify-center items-center bg-white-green">

                    <div class="w-9/12 max-h-full border-2 border-green-gd rounded-xl mb-4 overflow-y-auto">
                        @if (count($history) > 0)
                            @foreach ($history as $entry)
                                <div class="text-xl font-normal border-b-2 border-green-gd my-3 mx-3 flex flex-row">
                                    <img src="{{ asset('img/kamar4.jpg') }}"
                                        class="h-24 w-24 object-cover rounded-xl mb-3">
                                    <div class="ml-6 flex flex-col">
                                        <div class="text-xl font-bold mb-2">{{ $entry['kos'] }}</div>
                                        <div class="text-lg font-light mb-5">{{ $entry['kamar'] }}</div>
                                        <div class="text-lg font-light">{{ $entry['harga'] }}</div>
                                    </div>
                                    <div class="ml-auto flex justify-end items-center">
                                        <div class="text-lg font-light mr-5">
                                            {{ $entry['tanggal'] }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="text-xl font-normal text-center my-3 mx-3">
                                No booking history available.
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>
