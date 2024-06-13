<x-app-layout>
    <x-slot:title>Tambah Kos</x-slot:title>

    <main>
        <div class="m-4 mx-auto h-auto w-96 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
            <form action="{{ route('owner.store.dorms') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col items-center justify-center">
                    <x-input-form type="text" name="name" label="Nama Kos" />

                    <x-input-form type="number" name="capacity" label="Kapasitas" />

                    {{-- Radio Button Tipe Kos --}}
                    <div class="mb-4 w-full">
                        <label class="mb-2 block font-medium text-grey-gh">Tipe</label>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-row justify-center">
                                <input id="male" type="radio" name="type" value="male"
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="male" class="ml-2 text-black-blue">Putra</label>
                            </div>

                            <div class="flex flex-row justify-center">
                                <input id="female" type="radio" name="type" value="female"
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="female" class="ml-2 text-black-blue">Putri</label>
                            </div>

                            <div class="flex flex-row justify-center">
                                <input id="female" type="radio" name="type" value="mixed"
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="female" class="ml-2 text-black-blue">Campur</label>
                            </div>
                        </div>
                        @error('type')
                            <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <x-input-form type="text" name="longtitude" label="Longtitude" />

                    <x-input-form type="text" name="latitude" label="Latitude" />

                    <x-input-form type="file" name="images" label="Gambar Kos" />

                    <x-input-form type="text" name="address" label="Alamat Kos" />

                    <x-input-form type="text" name="description" label="Deskripsi Kos" />

                    <button type="submit"
                        class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12">
                        Tambah
                    </button>
                </div>

            </form>
        </div>
    </main>
</x-app-layout>
