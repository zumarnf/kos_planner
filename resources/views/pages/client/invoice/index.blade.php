<x-app-layout>
    <x-slot:title>Invoices</x-slot:title>

    <main class="m-4 mx-auto h-auto w-512 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
        <div class="mb-8 place-items-start text-5xl font-extrabold">INVOICES</div>

        <div class="flex flex-col items-center justify-center">
            <div>
                <div class="mb-2 flex flex-row items-center gap-1">
                    <p class="text-xl font-bold">Tanggal Masuk:</p>
                    <p class="text-lg font-medium">{{ $startDate }}</p>
                </div>
                <div class="mb-2 flex flex-row items-center gap-1">
                    <p class="text-xl font-bold">Tinggal Berapa Bulan:</p>
                    <p class="text-lg font-medium">{{ $month }}</p>
                </div>
                <div class="mb-2 flex flex-row items-center gap-1">
                    <p class="text-xl font-bold">Nama Kos:</p>
                    <p class="text-lg font-medium">{{ $dorm['name'] }}</p>
                </div>
                <div class="mb-2 flex flex-row items-center gap-1">
                    <p class="text-xl font-bold">Nomor Kamar:</p>
                    <p class="text-lg font-medium">{{ $room['room_number'] }}</p>
                </div>
                <div class="mb-2 flex flex-row items-center gap-1">
                    <p class="text-xl font-bold">Total Harga:</p>
                    <p class="text-lg font-medium">{{ Number::currency($price, 'IDR', 'id') }}</p>
                </div>
            </div>

            <button type="submit"
                class="relative mt-8 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12">
                Pay
            </button>
        </div>
    </main>
</x-app-layout>
