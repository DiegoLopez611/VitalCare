<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sedes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Título de la sección -->
                    <h3 class="text-lg font-medium text-gray-900 mb-6">Crear Nueva Sede</h3>
                    
                    <!-- Botón regresar a listado -->
                    <div class="mb-6">
                        <a href="{{ route('sedes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Volver al Listado
                        </a>
                    </div>

                    <!-- Formulario -->
                    <form method="POST" action="{{ route('sedes.store') }}">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nombre -->
                            <div>
                                <x-label for="nombre" value="Nombre" />
                                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
                                @error('nombre')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- telfono -->
                            <div>
                                <x-label for="telfono" value="Teléfono" />
                                <x-input id="telfono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required />
                                @error('telefono')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <!-- Dirección (campo completo) -->
                        <div class="mt-6">
                            <x-label for="direccion" value="Dirección" />
                            <textarea id="direccion" name="direccion" rows="3" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block w-full">{{ old('direccion') }}</textarea>
                            @error('direccion')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Botones de acción -->
                        <div class="flex justify-end mt-6 gap-4">
                            <a href="{{ route('sedes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-400 active:bg-gray-500 focus:outline-none focus:border-gray-500 focus:ring focus:ring-gray-200 disabled:opacity-25 transition">
                                Cancelar
                            </a>
                            <x-button type="submit" class="bg-indigo-600 hover:bg-indigo-700">
                                Guardar Sede
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>