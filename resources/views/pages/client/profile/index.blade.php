<x-app-layout>
    <x-slot:title>Invoices</x-slot:title>

    <main class="flex h-screen bg-white-green">
        <div class="flex h-full w-full flex-row">
            <div class="flex basis-1/3 flex-col bg-lg-green">
                <div class="flex items-start justify-between px-6 py-4"> <!-- Adjusted here -->
                    <div class="flex flex-col">
                        <div class="mx-8 mb-28 mt-8 flex flex-col text-5xl font-extrabold">Profile</div>
                        <div class="mb-6 ml-28 text-4xl font-semibold">
                            {{ $user['name'] }}
                        </div>
                        <div class="mb-2 ml-28 text-lg font-light">
                            {{ $user['gender'] }}
                        </div>
                        <div class="mb-2 ml-28 text-lg font-light">
                            {{ $user['email'] }}
                        </div>
                        <div class="mb-10 ml-28 text-lg font-light">
                            {{ $user['phone'] }}
                        </div>
                        <div class="ml-28 mt-10">
                            <form action="{{ route('client.register.owner') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit"
                                    class="relative flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0"
                                    style="width: 200px;">
                                    Register as Owner?
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex basis-2/3 flex-col items-center justify-center bg-white-green">

                {{-- <div class="mb-4 max-h-full w-9/12 overflow-y-auto rounded-xl border-2 border-green-gd">
                    @if (count($history) > 0)
                        @foreach ($history as $entry)
                            <div class="mx-3 my-3 flex flex-row border-b-2 border-green-gd text-xl font-normal">
                                <img src="{{ asset('img/kamar4.jpg') }}" class="mb-3 h-24 w-24 rounded-xl object-cover">
                                <div class="ml-6 flex flex-col">
                                    <div class="mb-2 text-xl font-bold">{{ $entry['kos'] }}</div>
                                    <div class="mb-5 text-lg font-light">{{ $entry['kamar'] }}</div>
                                    <div class="text-lg font-light">{{ $entry['harga'] }}</div>
                                </div>
                                <div class="ml-auto flex items-center justify-end">
                                    <div class="mr-5 text-lg font-light">
                                        {{ $entry['tanggal'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="mx-3 my-3 text-center text-xl font-normal">
                            No booking history available.
                        </div>
                    @endif
                </div> --}}

            </div>
        </div>
    </main>
</x-app-layout>
