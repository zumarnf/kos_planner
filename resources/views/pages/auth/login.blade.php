<x-auth-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="min-h-full">
        <main class="flex h-screen w-screen bg-white-green">
            <div class="flex h-full w-full flex-row">
                {{-- Left Section --}}
                <div class="flex basis-1/2 items-center bg-lg-green">
                    <div class="ml-28 flex flex-col">
                        <div class="text-6xl font-extrabold text-green-gd">Easy Stays,</div>
                        <div class="text-7xl font-extrabold text-black-blue">Happy Days</div>
                    </div>
                </div>

                {{-- Right Section --}}
                <div class="flex basis-1/2 flex-col items-center justify-center bg-white-green">
                    {{-- Title --}}
                    <div class="mx-24 mb-4 flex flex-row">
                        <div class="mr-2.5 basis-1/2">
                            <div class="text-4xl font-bold text-black-blue">Kos</div>
                        </div>
                        <div class="basis-1/2">
                            <div class="text-4xl font-bold text-green-gd">Planner</div>
                        </div>
                    </div>

                    {{-- Forms --}}
                    <form action="{{ route('doLogin') }}" method="POST" class="w-full px-36">
                        @csrf

                        {{-- Email --}}
                        <x-input-form type="text" name="email" label="Email" />

                        {{-- Password --}}
                        <x-input-form type="password" name="password" label="Password" />

                        <div class="mb-8 flex justify-end">
                            <a href="#" class="items-end justify-end text-end text-green-gd">Forgot password?</a>
                        </div>

                        <div class="mb-10">
                            <button type="submit"
                                class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">Login</button>
                        </div>

                        <div class="mb-8 flex justify-center text-center">
                            <div class="mr-2 text-grey-gh">Don't have acount?</div>
                            <a href="/register" class="items-end justify-end text-end text-green-gd">Register here!</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-auth-layout>
