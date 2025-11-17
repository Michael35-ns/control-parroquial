<x-layouts.app>
    <div class="container mx-auto px-4 py-8">
        @section('title', 'Inventario - Control Parroquial')
        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Bienes</h1>
            <a href="{{ route('bienes.index') }}"
                class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Regresar
            </a>
        </div>

        <!-- Formulario -->
        <div class="flex justify-center items-center">
            <div class="w-full max-w-md">
                <div class="bg-orange-100 rounded-lg p-8 shadow-md w-full">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Editando bien</h2>
                    <form action="{{ route('bienes.update',$bien->id)}}" id="formEditar{{$bien->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Campo Nombre -->
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre</label>
                            <input type="text" name="nombre" id="nombre"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                value="{{ old('nombre',$bien->nombre) }}">
                            @error('nombre')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 font-medium mb-2">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                value="{{ old('descripcion',$bien->descripcion) }}">
                            @error('descripcion')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="cantidad" class="block text-gray-700 font-medium mb-2">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" min="1"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                value="{{ old('cantidad',$bien->cantidad) }}">
                            @error('cantidad')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="estado" class="block text-gray-700 font-medium mb-2">Estado</label>
                            <select name="estado_item_id" id="estado_item_id"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="">Seleccione un espacio</option>
                                @foreach($estados as $estado)
                                <option value="{{ $estado->id }}" @selected(old('estado_item_id', $bien->estado_item_id)
                                    == $estado->id)>
                                    {{ $estado->descripcion }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="espacio" class="block text-gray-700 font-medium mb-2">Espacio</label>
                            <select name="tipo_espacio_id" id="tipo_espacio_id"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                                <option value="">Seleccione un espacio</option>
                                @foreach($espacios as $espacio)
                                <option value="{{ $espacio->id }}" @selected(old('tipo_espacio_id', $bien->
                                    espacio->tipo_espacio_id) == $espacio->id)>
                                    {{ $espacio->nombre }}
                                </option>
                                @endforeach
                            </select>
                            @error('tipo_espacio_id')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex gap-3">
                            <button type="button" data-form-id="formEditar{{$bien->id}}"
                                class="btn-confirmar-edicion flex-1 bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                                Guardar
                            </button>
                            <a href="{{ route('bienes.index') }}"
                                class="flex-1 bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg transition-colors text-center">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-layouts.app>