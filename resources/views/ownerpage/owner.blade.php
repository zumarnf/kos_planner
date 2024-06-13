<x-app-layout>
    <x-slot:title>Home</x-slot:title>

    <main>
        <div class="flex flex-row justify-between">
            <div class="mx-12 my-8 text-4xl font-extrabold">Daftar Kos</div>
            <div class="mx-12 my-8">
                <a href="/ownerpage/updatedorm"
                    class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-10 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">
                    Tambah Kos Baru
                </a>
            </div>
        </div>

        <div class="ml-10 mr-10 grid grid-cols-4">
            @foreach ($dorms as $dorm)
                <div class="mx-12 my-8 flex h-80 w-60 flex-col gap-1 rounded-2xl bg-white-green p-3">
                    <div class="h-48 rounded-xl">
                        <img src="{{ config('app.baseApiImgUrl') . $dorm['images'] }}" class="h-full w-full rounded-xl object-cover">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-black-blue">{{ $dorm['name'] }}</span>
                                <p class="text-xs text-gray-700">{{ $dorm['address'] }}</p>
                            </div>
                        </div>
                        <a href="/ownerroom/{{ $dorm['id'] }}" class="rounded-md bg-black-blue py-2 text-center text-gray-50 hover:bg-green-gd">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-app-layout>
