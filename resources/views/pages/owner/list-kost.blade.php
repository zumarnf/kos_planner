<x-app-layout>
    <x-slot:title>List Kos</x-slot:title>

    <main>
        <div class="flex flex-row justify-between">
            <div class="mx-12 my-8 text-4xl font-extrabold">Daftar Kos</div>
            <div class="mx-12 my-8">
                <a href={{ route('owner.create.dorms') }}
                    class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-10 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0">
                    Tambah Kos Baru
                </a>
            </div>
        </div>

        @if ($dorms !== null)
            <div class="ml-10 mr-10 grid grid-cols-5">
                @foreach ($dorms as $dorm)
                    <div class="relative mx-12 my-8 flex h-80 w-60 flex-col gap-1 rounded-2xl bg-white-green p-3">
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
                            <a href="{{ route('owner.detail.dorms', ['id' => $dorm['id']]) }}"
                                class="rounded-md bg-black-blue py-2 text-center text-gray-50 hover:bg-green-gd">Detail</a>
                        </div>

                        {{-- Update --}}
                        <a href="{{ route('owner.edit.dorms', ['id' => $dorm['id']]) }}" class="absolute left-2 top-2 h-8 w-8 rounded-full bg-yellow-500 p-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="h-full w-full text-white">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                            </svg>
                        </a>

                        {{-- Delete --}}
                        <form action="{{ route('owner.delete.dorms', ['id' => $dorm['id']]) }}" method="POST"
                            class="absolute right-2 top-2 h-8 w-8 rounded-full bg-red-500">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="h-full w-full p-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="h-full w-full text-white">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @else
            <p class="mx-auto mt-32 w-full text-center text-3xl font-bold">Tidak ada Kos</p>
        @endif
    </main>
</x-app-layout>
