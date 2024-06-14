<x-app-layout>
    <x-slot:title>Booking</x-slot:title>

    <main class="m-4 mx-auto h-auto w-512 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
        <form action="{{ route('client.invoice') }}" method="POST">
            @csrf

            <input type="hidden" name="id" value="{{ $room['id'] }}">
            <div class="flex flex-row">
                <div class="flex basis-1/2 flex-col justify-start">
                    <div class="mb-4">
                        <label for="tanggal" class="mb-2 block font-medium text-grey-gh">Tanggal Check In</label>
                        <input type="date" id="tanggal" name="check_in_date" placeholder="Tanggal Pemesanan"
                            class="w-full rounded-md py-2 pl-4 pr-4 outline-none ring-1 ring-grey-gh">
                        @error('check_in_date')
                            <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="bulan" class="mb-2 block font-medium text-grey-gh">Berapa Bulan</label>
                        <input type="number" id="bulan" name="total_month" placeholder="Berapa bulan" value="1"
                            class="w-full rounded-md py-2 pl-4 pr-12 outline-none ring-1 ring-grey-gh">
                        @error('total_month')
                            <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex basis-1/2 flex-col">
                    <div class="mb-2 ml-20">
                        <p class="text-xl font-bold">Nama Kos</p>
                        <p class="font-medium">{{ $dormDetail['name'] }}</p>
                    </div>
                    <div class="mb-2 ml-20">
                        <p class="text-xl font-bold">Nama Pemilik Kos</p>
                        <p class="font-medium">{{ $dormOwner['name'] }}</p>
                    </div>
                    <div class="mb-2 ml-20">
                        <p class="text-xl font-bold">Nomor Kamar</p>
                        <p class="font-medium">{{ $room['room_number'] }}</p>
                    </div>
                    <div class="mb-2 ml-20">
                        <p class="text-xl font-bold">Tipe Kamar</p>
                        <p class="font-medium">{{ $room['room_type'] }}</p>
                    </div>
                    <div class="mb-2 ml-20">
                        <p class="text-xl font-bold">Harga Kamar</p>
                        <p class="font-medium">{{ Number::currency($room['price'], 'IDR', 'id') }}</p>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit"
                            class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-app-layout>
