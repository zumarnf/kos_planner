<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Update Dorm</title>
</head>

<body class="h-full flex flex-col">

    <x-navbar></x-navbar>

    <main>
        <div class="bg-lg-green w-96 mx-auto h-auto border-2 border-grey-gd rounded-xl p-8 m-4">
            <form action="#" method="#">
                <div class="flex flex-col justify-start">
                    <div class="mb-4">
                        <label for="nomor" class="block text-grey-gh font-medium mb-2">Nomor Kamar</label>
                        <input type="number" id="nomor" name="nomor" placeholder="nomor kamar"
                            class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="jenis kamar" class="block text-grey-gh font-medium mb-2">jenis kamar</label>
                        <input type="text" id="jenis kamar" name="jenis kamar" placeholder="jenis kamar"
                            class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="availabilty" class="block text-grey-gh font-medium mb-2">availabilty</label>
                        <input type="number" id="availabilty" name="availabilty" placeholder="availabilty"
                            class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="facility" class="block text-grey-gh font-medium mb-2">facility</label>
                            <textarea type="text" id="facility" name="facility"
                                class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                            </textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-grey-gh font-medium mb-2">image</label>
                        <input type="file" id="image" name="image" placeholder="image" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="harga" class="block text-grey-gh font-medium mb-2">harga</label>
                        <input type="number" id="harga" name="harga" placeholder="harga" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi" class="block text-grey-gh font-medium mb-2">deskripsi</label>
                        <input type="text" id="deskripsi" name="deskripsi" placeholder="deskripsi" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-black-gd w-full md:w-64 py-2 text-white-green my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 px-36 md:px-12">Tambah</button>
                    </div>
                </div>

        </form>
    </div>
    </main>

</body>
</html>
