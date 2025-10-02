<x-layouts.app>
    <div class="container mx-auto px-4 py-8">
        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Bienes</h1>
            <button
                class="bg-green-400 hover:bg-green-500 text-white font-semibold px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Agregar
            </button>
        </div>

        <!-- Sección Templo -->
        <div class="mb-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Templo</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @forelse ($temploItems as $item)
                <div class="bg-yellow-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-gray-800 mb-2">{{$item->cantidad}}</div>
                    <div class="text-lg text-gray-700">{{$item->nombre}}</div>
                </div>
                @empty
                <p>No hay bienes registrados</p>
                @endforelse
            </div>
        </div>

        <!-- Sección Casa Cural -->
        <div>
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Casa Cural</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @forelse ($casaItems as $item)
                <div class="bg-yellow-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-gray-800 mb-2">{{$item->cantidad}}</div>
                    <div class="text-lg text-gray-700">{{$item->nombre}}</div>
                </div>
                @empty
                <p>No hay bienes registrados</p>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Salón</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Card Bancas -->
                @forelse ($salonItems as $item)
                <div class="bg-yellow-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow">
                    <div class="text-5xl font-bold text-gray-800 mb-2">{{$item->cantidad}}</div>
                    <div class="text-lg text-gray-700">{{$item->nombre}}</div>
                </div>
                @empty
                <p>No hay bienes </p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.app>