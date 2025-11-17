<div class="mb-8">
    <div class="flex">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{$titulo}}</h2>
        <div class="px-4 py-1 mb-4">
            <a href="{{route('inventario.pdf', $espacioId)}}"
                class="bg-indigo-400 hover:bg-indigo-500 text-white font-semibold px-2 rounded-lg flex items-center transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                Pdf
            </a>
        </div>

    </div>


    <div class="grid grid-cols-1 md:grid-cols-6 gap-6">
        @forelse ($items as $item)
        <div
            class="bg-yellow-100 rounded-lg p-6 shadow-sm hover:shadow-md transition-shadow relative hover:bg-yellow-200">
            <button wire:click="eliminar({{ $item->id }})"
                class="absolute top-3 right-3 text-red-500 hover:text-red-800 transition-colors cursor-pointer">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                </svg>
            </button>
            <a href="{{route('bienes.edit',$item->id)}}"
                class="absolute top-9 right-2 text-orange-500 hover:text-orange-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                </svg>
            </a>
          
            <div class="text-5xl font-bold text-gray-800 mb-2">{{$item->cantidad}}</div>
            <div class="text-lg text-gray-700">{{$item->nombre}}</div>
            <div class="text-lg text-gray-700">{{$item->nombre}}</div>
        </div>
        @empty
        <p class="text-center bg-red-300 rounded-2xl border p-2 hover:bg-red-400">No hay bienes registrados</p>
        @endforelse
    </div>
</div>