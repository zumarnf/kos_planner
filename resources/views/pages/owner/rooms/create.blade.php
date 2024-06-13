<x-app-layout>
    <x-slot:title>Tambah Kamar</x-slot:title>

    <main>
        <div class="m-4 mx-auto h-auto w-96 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
            <form action="{{ route('owner.store.rooms') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="dorm_id" value="{{ $dorm_id }}">
                <div class="flex flex-col items-center justify-center">
                    <x-input-form type="text" name="room_number" label="Nomor Kamar" />

                    <x-input-form type="text" name="room_type" label="Jenis Kamar" />

                    <x-input-form type="text" name="available" label="Availabilty" />

                    <div class="mb-4 w-full">
                        <label for="facility" class="mb-2 block font-medium text-grey-gh">Fasilitas</label>
                        <textarea type="text" id="facility" name="facilities" class="w-full rounded-md py-2 pl-4 pr-4 outline-none ring-1 ring-grey-gh"></textarea>
                    </div>

                    <x-input-form type="file" name="images" label="Image" />

                    <x-input-form type="text" name="price" label="Harga" />

                    <x-input-form type="text" name="description" label="Deskripsi" />

                    <button type="submit"
                        class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12">
                        Tambah Kamar
                    </button>
                </div>

            </form>
        </div>
    </main>
</x-app-layout>
