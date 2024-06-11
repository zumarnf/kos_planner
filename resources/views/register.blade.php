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
            <div class="basis-1/2 flex items-center bg-lg-green">
                <div class="flex flex-col ml-28">
                    <div class="font-extrabold text-green-gd text-6xl">Find Peace</div>
                    <div class="font-extrabold text-black-blue text-7xl">of Mind</div>
                </div>
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
                        <label for="name" class="block text-grey-gh font-medium mb-2">Your Name</label>
                        <input type="text" id="email" placeholder="Name" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-grey-gh font-medium mb-2">Phone Number</label>
                        <input type="number" id="email" placeholder="Phone Number" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-grey-gh font-medium mb-2">Email</label>
                        <input type="email" id="email" placeholder="Email" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-10">
                        <label for="password" class="block text-grey-gh font-medium mb-2">Password</label>
                        <input type="password" id="password" placeholder="Password" class="w-full py-2 pl-4 pr-12 rounded-md outline-none ring-1 ring-grey-gh">
                    </div>
                    <div class="mb-10">
                        <div>
                            <input id="male" class="dark:border-white-400/20 dark:scale-100 transition-all duration-500 ease-in-out dark:hover:scale-110 dark:checked:scale-100 w-6 h-6" type="radio" name="gender">
                            <label for="male" class="text-black-blue ml-2">Male</label>
                        </div>
                        <div>
                            <input id="female" class="dark:border-white-400/20 dark:scale-100 transition-all duration-500 ease-in-out dark:hover:scale-110 dark:checked:scale-100 w-6 h-6" type="radio" name="gender">
                            <label for="female" class="text-black-blue ml-2">Female</label>
                        </div>
                    </div>


                    <div class="mb-10">
                        <button type="submit" class="bg-black-gd w-full py-2 text-white-green my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0">Register</button>
                    </div>
                    <div class="mb-8 flex justify-center text-center">
                        <div class="mr-2 text-grey-gh">Already have an acount?</div>
                        <a href="/login" class="text-end justify-end items-end text-green-gd">Let's Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>




</div>

</body>
</html>
