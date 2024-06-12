<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Halaman Admin</title>
</head>

<body class="h-full">
    <x-navbar />

    <main class="mt-24 flex items-center justify-center">
        <div class="flex gap-8">
            {{-- Table Pending Approved --}}
            <table class="table-fixed border border-gray-300">
                <thead>
                    <tr class="text-center">
                        <th class="border border-gray-300 px-16 py-2">Nama Pemilik Kos</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Decline</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pendingApprove as $pending)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $pending['name'] }}</td>
                            {{-- Approve Button --}}
                            <td class="border border-gray-300 px-4 py-2">
                                <form action="{{ route('handleApprove') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $pending['id'] }}">
                                    <button type="submit"
                                        class="inline-flex items-center rounded-md bg-lg-green px-3 py-2 text-sm font-medium text-black-blue transition delay-75 ease-in-out hover:-translate-y-1 hover:scale-100 hover:bg-green-gd hover:text-white-green">
                                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 13l4 4L19 7" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                        </svg>
                                        Approve
                                    </button>
                                </form>
                            </td>

                            {{-- Decline Button --}}
                            <td class="border border-gray-300 px-4 py-2">
                                <form action="{{ route('handleDecline') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $pending['id'] }}">
                                    <button
                                        class="inline-flex items-center rounded-md bg-lg-green px-3 py-2 text-sm font-medium text-black-blue transition delay-75 ease-in-out hover:-translate-y-1 hover:scale-100 hover:bg-green-gd hover:text-white-green">
                                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="3" class="py-5 text-xl font-semibold">NO Data!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Table Approved --}}
            <table class="table-fixed border border-gray-300">
                <thead>
                    <tr class="text-center">
                        <th class="border border-gray-300 px-16 py-2">Nama Pemilik Kos</th>
                        <th class="border border-gray-300 px-4 py-2">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($approved as $approved)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $approved['name'] }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <form action="{{ route('handleDelete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $approved['id'] }}">
                                    <button
                                        class="inline-flex items-center rounded-md bg-lg-green px-3 py-2 text-sm font-medium text-black-blue transition delay-75 ease-in-out hover:-translate-y-1 hover:scale-100 hover:bg-green-gd hover:text-white-green">
                                        <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                                stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td colspan="2" class="py-5 text-xl font-semibold">NO Data!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>

    <x-alert />
</body>

</html>
