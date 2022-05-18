<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($curses as $curse)
    <div class="bg-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="">
            <img src="{{ $curse->image }}" alt="" class="rounded-md mb-2">
            {{-- truncate: funciona para que no exista un título de 2 líneas --}}
            <h2 class="text-lg text-gray-600 truncate uppercase">{{ $curse->name }}</h2>
            <h3 class="text-md text-gray-500">{{ $curse->excerpt }}</h3> <!--Extracto-->

            <img 
                src="{{ $curse->user->avatar }}" alt="" 
                class="rounded-full mx-auto h-16 w-16 mt-4"
            >
        </a>
    </div>
    @endforeach
</div>
