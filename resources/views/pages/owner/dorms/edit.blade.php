<x-app-layout>
    <x-slot:title>Edit Kos</x-slot:title>

    <main>
        <div class="m-4 mx-auto h-auto w-96 rounded-xl border-2 border-grey-gd bg-lg-green p-8">
            <form action="{{ route('owner.update.dorms') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $dormDetail['id'] }}">
                <div class="flex flex-col items-center justify-center">
                    <x-input-form type="text" name="name" label="Nama Kos" value="{{ $dormDetail['name'] }}" />

                    <x-input-form type="number" name="capacity" label="Kapasitas" value="{{ $dormDetail['capacity'] }}" />

                    {{-- Radio Button Tipe Kos --}}
                    <div class="mb-4 w-full">
                        <label class="mb-2 block font-medium text-grey-gh">Tipe</label>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-row justify-center">
                                <input id="male" type="radio" name="type" value="male" @checked($dormDetail['type'] == 'male')
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="male" class="ml-2 text-black-blue">Putra</label>
                            </div>

                            <div class="flex flex-row justify-center">
                                <input id="female" type="radio" name="type" value="female" @checked($dormDetail['type'] == 'female')
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="female" class="ml-2 text-black-blue">Putri</label>
                            </div>

                            <div class="flex flex-row justify-center">
                                <input id="female" type="radio" name="type" value="mixed" @checked($dormDetail['type'] == 'mixed')
                                    class="dark:border-white-400/20 h-6 w-6 transition-all duration-500 ease-in-out dark:scale-100 dark:checked:scale-100 dark:hover:scale-110">
                                <label for="female" class="ml-2 text-black-blue">Campur</label>
                            </div>
                        </div>
                        @error('type')
                            <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- <x-input-form type="text" name="longtitude" label="Longtitude" value="{{ $dormDetail['longtitude'] }}" />

                    <x-input-form type="text" name="latitude" label="Latitude" value="{{ $dormDetail['latitude'] }}" /> --}}

                    <x-input-form type="file" name="images" label="Gambar Kos" value="{{ config('app.baseApiImgUrl') . $dormDetail['images'] }}" />

                    <x-input-form type="text" name="description" label="Deskripsi Kos" value="{{ $dormDetail['description'] }}" />

                    <x-input-form type="text" name="address" label="Alamat Kos" value="{{ $dormDetail['address'] }}" />

                    <div class="mb-4 w-full">
                        <div class="mb-1 flex flex-row items-center justify-between">
                            <h2 class="font-medium text-grey-gh">Your Location</h2>
                            <button onclick="getLocation()" type="button" class="text-xs">Get Location</button>
                        </div>
                        <div class="mb-1 flex w-full flex-row">
                            <input type="hidden" name="latitude" id="input_latitude">
                            <input type="hidden" name="longtitude" id="input_longitude">
                            <p id="latitude" class="text-xs"></p>
                            <p id="longitude" class="text-xs"></p>
                        </div>
                        @error('latitude')
                            <p class="mt-0.5 text-xs font-medium text-red-500">{{ $message }}</p>
                        @enderror
                        {{-- <button onclick="openGoogleMaps()" type="button" class="mt-2 rounded-lg bg-blue-500 px-4 py-2 text-white">Open in Google Maps</button> --}}

                        <img id="map-image" alt="Map Image" class="hidden">
                    </div>

                    <button type="submit"
                        class="relative my-3 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl bg-black-gd px-36 py-2 text-white-green shadow-md transition-all duration-500 ease-in-out before:absolute before:-left-full before:top-0 before:z-[-1] before:h-full before:w-full before:rounded-xl before:bg-gradient-to-r before:from-[#78ad87] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out hover:scale-105 hover:shadow-lg hover:before:left-0 md:w-64 md:px-12">
                        Update
                    </button>
                </div>

            </form>
        </div>
    </main>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            document.getElementById("input_latitude").value = position.coords.latitude
            document.getElementById("input_longitude").value = position.coords.longitude

            document.getElementById("latitude").innerHTML = position.coords.latitude + ', ';
            document.getElementById("longitude").innerHTML = position.coords.longitude;
            showMapImage(position.coords.latitude, position.coords.longitude);
        }

        function openGoogleMaps() {
            var latitude = document.getElementById("latitude").innerHTML.split(": ")[1];
            var longitude = document.getElementById("longitude").innerHTML.split(": ")[1];
            window.open("https://www.google.com/maps/search/?api=1&query=" + latitude + "," + longitude);
        }

        function showMapImage(latitude, longitude) {
            var mapImage = document.getElementById("map-image");
            var apiKey = "AIzaSyBZEUifxCdvAiOQO2cs2neEI66am9aF6MQ"; // Replace with your Google API key

            arrclass = ['mt-4', 'h-64', 'w-full', 'rounded-lg', 'object-cover']
            mapImage.classList.remove('hidden');
            mapImage.classList.add(arrclass)

            // Construct the URL for the static map image
            var imageUrl = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude +
                "&zoom=13&size=400x300&maptype=roadmap&markers=color:red%7Clabel:A%7C" + latitude + "," + longitude +
                "&key=" + apiKey;

            // Set the source of the image to the constructed URL
            mapImage.src = imageUrl;
        }
    </script>
</x-app-layout>
