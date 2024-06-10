<div class="basis-2/3 flex flex-col items-center">
    <!-- Main Image -->
    <div class="w-full lg:w-2/3">
        <img id="mainImage" src="{{ asset('img/kamar4.jpg') }}" alt="Main Image" class="w-full rounded-lg shadow-md">
    </div>
    <!-- Thumbnails -->
    <div class="flex mt-4 space-x-4">
        <img src="{{ asset('img/kamar.jpg') }}" alt="Thumbnail 1" class="w-20 h-20 rounded-lg shadow-md cursor-pointer" onclick="changeImage('{{ asset('img/kamar.jpg') }}')">
        <img src="{{ asset('img/kamar2.jpg') }}" alt="Thumbnail 2" class="w-20 h-20 rounded-lg shadow-md cursor-pointer" onclick="changeImage('{{ asset('img/kamar2.jpg') }}')">
        <img src="{{ asset('img/kamar3.jpg') }}" alt="Thumbnail 3" class="w-20 h-20 rounded-lg shadow-md cursor-pointer" onclick="changeImage('{{ asset('img/kamar3.jpg') }}')">
        <img src="{{ asset('img/kamar4.jpg') }}" alt="Thumbnail 4" class="w-20 h-20 rounded-lg shadow-md cursor-pointer" onclick="changeImage('{{ asset('img/kamar4.jpg') }}')">
    </div>
</div>
