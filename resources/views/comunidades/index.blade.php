<x-layouts.app>
    @section('title', 'Dashboard - Control Parroquial')
    <div class="min-h-screen bg-gray-50 py-12 px-4">
        <div class="max-w-4xl mx-auto">
            {{-- Título --}}
            <h1 class="text-3xl font-semibold text-center text-gray-800 mb-12">
                Comunidades
            </h1>
            {{-- Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($comunidades as $comunidad)
                <a href="{{route('comunidad.details',$comunidad->id)}}"
                    class="bg-yellow-100 hover:bg-yellow-200 transition-colors duration-200 rounded-lg p-8 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-md">
                    <svg class="w-16 h-16 mb-4 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="text-lg font-medium text-gray-800">{{$comunidad->nombre}}</span>
                </a>

                @empty
                <p class="text-center bg-red-300 rounded-2xl border p-2 hover:bg-red-400">No hay comunidades</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layouts.app>