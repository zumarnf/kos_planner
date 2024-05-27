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

<div class="min-h-full">

    <main class="flex w-screen h-screen bg-white-green">
        <div class="flex flex-row w-full h-full">
            <div class="basis-1/2 flex justify-center items-center text-center bg-lg-green">
                <h2>Hai</h2>
            </div>
            <div class="basis-1/2 flex flex-col justify-center items-center bg-white-green">
                <div class="flex flex-row mx-24 mb-4">
                    <div class="basis-1/2 mr-2.5">
                        <div class="text-4xl font-bold text-black-blue">Kos</div>
                    </div>
                    <div class="basis-1/2">
                        <div class="text-4xl font-bold text-green-gd">Planner</div>
                    </div>
                </div>
                <div class="w-full px-36">
                    <div class="mb-4">
                        <label for="email" class="block text-grey-gh font-medium mb-2">Email</label>
                        <input type="email" id="email" placeholder="Email" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-grey-gh font-medium mb-2">Password</label>
                        <input type="password" id="password" placeholder="Password" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-8 flex justify-end">
                        <a href="#" class="text-end justify-end items-end text-green-gd">Forgot password?</a>
                    </div>
                    <div class="mb-10">
                        <button type="submit" class="bg-black-gd w-full rounded-md py-2 text-white-green">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </main>




</div>

</body>
</html>
