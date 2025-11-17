<x-layouts.app>
    @section('title', 'Inventario - Control Parroquial')
    <div class="container mx-auto px-4 py-8 gap-6">
        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Bienes</h1>
            <a href="{{route('bienes.create')}}"
                class="bg-green-400 hover:bg-green-500 text-white font-semibold px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Agregar
            </a>
        </div>

        {{-- ✅ Cargar espacios dinámicamente --}}
        @foreach(auth()->user()->comunidad->espacios as $espacio)
        @if(auth()->user()->rol_id == 1 || $espacio->tipo_espacio_id != 1)
        @livewire('bienes-espacio', [
        'espacioId' => $espacio->id,
        'titulo' => $espacio->tipoEspacio->nombre ?? 'Sin nombre'
        ], key('espacio-'.$espacio->id))
        @endif
        @endforeach

    </div>
</x-layouts.app>