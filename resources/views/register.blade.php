<x-auth-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="min-h-full">
        <main class="flex h-screen w-screen bg-white-green">
            <div class="flex h-full w-full flex-row">
                {{-- Left Section --}}
                <div class="flex basis-1/2 items-center bg-lg-green">
                    <div class="ml-28 flex flex-col">
                        <div class="text-6xl font-extrabold text-green-gd">Find Peace</div>
                        <div class="text-7xl font-extrabold text-black-blue">of Mind</div>
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
                    <form action="{{ route('doRegister') }}" method="POST" class="w-full px-36">
                        @csrf

                        {{-- Name --}}
                        <x-input-form type="text" name="name" label="Your Name" />

                        {{-- Phone Number --}}
                        <x-input-form type="number" name="phone" label="Phone Number" />

                        {{-- Email --}}
                        <x-input-form type="email" name="email" label="Email" />

                        {{-- Password --}}
                        <x-input-form type="password" name="password" label="Password" />

                        {{-- Radio Male or Female --}}
                        <div class="mb-10 mt-6">
                            <div class="flex flex-row gap-5">
                                <div class="flex flex-row justify-center">
                                    <input id="male" type="radio" name="gender" value="male"
                                        class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                    <label for="male" class="ml-2 text-black-blue">Male</label>
                                </div>

                                <div class="flex flex-row justify-center">
                                    <input id="female" type="radio" name="gender" value="female"
                                        class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                    <label for="female" class="ml-2 text-black-blue">Female</label>
                                </div>
                            </div>
                            @error('gender')
                                <p class="mt-1 text-xs font-medium text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                            class="relative mb-10 mt-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">Register</button>

                        <div class="mb-8 flex justify-center text-center">
                            <div class="mr-2 text-grey-gh">Already have an acount?</div>
                            <a href="/login" class="items-end justify-end text-end text-green-gd">Let's Login!</a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-auth-layout>
