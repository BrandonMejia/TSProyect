<x-app-layout>

<!-- Bg indigo -->
<div class="max-w-screen-lg bg-indigo-500 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
    <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
        Mostrar lugar de vacunación
    </h2>
    <div class="mt-8 flex justify-center">
        <div class="inline-flex rounded-md bg-white shadow">
            <a href="{{route('centros.mostrar')}}" class="text-gray-700 font-bold py-2 px-6">
                Mostrar
            </a>
        </div>
    </div>
</div>

<!-- Bg white -->
<div class="max-w-screen-lg bg-white shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
    <h2 class="text-3xl leading-9 font-bold tracking-tight text-gray-800 sm:text-4xl sm:leading-10">
        Seleccionar lugar de vacunación
    </h2>
    <div class="mt-8 flex justify-center">
        <div class="inline-flex rounded-md bg-blue-500 shadow">
            <a href="{{route('centros.elegir')}}" class="text-gray-200 font-bold py-2 px-6">
                Seleccionar
            </a>
        </div>
    </div>
</div>
</x-app-layout>