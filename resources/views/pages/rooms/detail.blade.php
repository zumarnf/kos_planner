<x-app-layout>
    <x-slot:title>Detail Kamar</x-slot:title>

    <main class="w-full flex-grow">
        <div class="flex h-[847px] w-full flex-row">
            <div class="min-h flex basis-1/2 items-center bg-lg-green">
                <div class="mx-20 flex h-fit flex-col">
                    <img src="{{ config('app.baseApiImgUrl') . $detaiLRoom['images'] }}" class="h-full w-full rounded-xl object-cover">
                </div>
            </div>

            <div class="flex basis-1/2 flex-col items-center justify-center bg-green-100">
                <div class="w-full px-20">
                    <div class="mb-2">
                        <p class="text-2xl font-bold">Nomor Kamar</p>
                        <p class="text-xl font-medium">{{ $detaiLRoom['room_number'] }}</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-2xl font-bold">Tipe Kamar</p>
                        <p class="text-xl font-medium">{{ $detaiLRoom['room_type'] }}</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-2xl font-bold">Fasilitas Kamar</p>
                        <p class="text-xl font-medium">{{ $detaiLRoom['facilities'] }}</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-2xl font-bold">Deskripsi Kamar</p>
                        <p class="text-xl font-medium">{{ $detaiLRoom['description'] }}</p>
                    </div>
                    <div class="mb-2">
                        <p class="text-2xl font-bold">Harga Kamar</p>
                        <p class="text-xl font-medium">Rp. {{ $detaiLRoom['price'] }}</p>
                    </div>
                    @if (Session::get('authUser')['role'] != 'owner')
                        <div class="mb-10 mt-10">
                            <a href="{{ route('client.booking', ['id' => $detaiLRoom['id']]) }}"
                                class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">
                                Book Now
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
