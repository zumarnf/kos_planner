<x-app-layout>
    <x-slot:title>Detail Kos</x-slot:title>

    <main>
        <div class="flex h-screen w-screen bg-white-green">
            <div class="flex h-full w-full flex-row">
                <div class="flex basis-1/2 items-center bg-lg-green">
                    <div class="mx-20 flex flex-col">
                        <img src="{{ asset('img/kamar4.jpg') }}" class="h-full w-full rounded-xl object-cover">
                    </div>
                </div>
                <div class="flex basis-1/2 flex-col items-center justify-center bg-white-green">
                    <div class="mx-24 mb-4 flex flex-row text-5xl font-extrabold">
                        {{ $dormDetail['name'] }}
                    </div>
                    <div class="mx-24 mb-4 flex flex-row text-2xl font-medium">
                        {{ $dormDetail['address'] }}
                    </div>
                    <div class="flex flex-col justify-start">
                        <div class="mx-24 mb-4 flex flex-row text-2xl font-light">
                            Tipe Kos: {{ $dormDetail['type'] }}
                        </div>
                        <div class="mx-24 mb-4 flex flex-row text-2xl font-light">
                            Kapasitas Kamar: {{ $dormDetail['capacity'] }}
                        </div>
                    </div>

                    @if (Session::get('authUser')['role'] == 'owner')
                        <div class="mx-12 my-8">
                            <a href="/ownerpage/updateroom"
                                class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-10 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">
                                Tambah Kamar
                            </a>
                        </div>
                    @endif
                </div>


            </div>
        </div>
        <div class="ml-16 mr-16 grid grid-cols-4">
            @foreach ($rooms as $room)
                <div class="mx-12 my-8 flex h-80 w-60 flex-col gap-1 rounded-2xl bg-white-green p-3">
                    <div class="h-48 rounded-xl">
                        <img src="{{ asset('img/kamar.jpg') }}" class="h-full w-full rounded-xl object-cover">
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row justify-between">
                            <div class="flex flex-col">
                                <span class="text-xl font-bold text-black-blue">{{ $room['room_number'] }}</span>
                                <p class="text-xs text-gray-700">{{ $room['room_type'] }}</p>
                            </div>
                            <span class="font-bold text-red-600">{{ $room['price'] }}</span>
                        </div>
                        <a href="/detailpage/detail/{{ $room['id'] }}"
                            class="rounded-md bg-black-blue py-2 text-center text-gray-50 hover:bg-green-gd">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-app-layout>
