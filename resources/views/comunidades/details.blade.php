<x-layouts.app>
    @section('title', 'Inventario - Control Parroquial')
    <div class="container mx-auto px-4 py-8 gap-6">
        <!-- Encabezado -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Bienes</h1>
        </div>

        <!-- Aquí llamas al componente de comunidad -->
        @livewire('bienes-comunidad', ['comunidadId' => $comunidad->id, 'titulo' => $comunidad->nombre])
    </div>
</x-layouts.app>
