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
        <div class="flex justify-center items-center mt-24">
            <div class="flex gap-8">
                <table class="table-fixed border border-gray-300">
                    <thead>
                        <tr class="text-center">
                            <th class="border border-gray-300 px-16 py-2">Nama Pemilik Kos</th>
                            <th class="border border-gray-300 px-4 py-2">Status</th>
                            <th class="border border-gray-300 px-4 py-2">Decline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Haji Supri</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <button class="inline-flex items-center px-3 py-2 bg-lg-green transition ease-in-out delay-75 hover:bg-green-gd hover:text-white-green text-black-blue text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-100">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                    Approve
                                </button>
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <button class="inline-flex items-center px-3 py-2 bg-lg-green transition ease-in-out delay-75 hover:bg-green-gd hover:text-white-green text-black-blue text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-100">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table-fixed border border-gray-300">
                    <thead>
                        <tr class="text-center">
                            <th class="border border-gray-300 px-16 py-2">Nama Pemilik Kos</th>
                            <th class="border border-gray-300 px-4 py-2">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">Haji Supri</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <button class="inline-flex items-center px-3 py-2 bg-lg-green transition ease-in-out delay-75 hover:bg-green-gd hover:text-white-green text-black-blue text-sm font-medium rounded-md hover:-translate-y-1 hover:scale-100">
                                    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-4 w-4 mr-2" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                    </svg>
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
