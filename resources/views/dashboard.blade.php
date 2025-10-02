<x-layouts.app>
    <x-layouts.app>

        @section('title', 'Dashboard - Control Parroquial')

        <div class="min-h-screen flex items-center justify-center p-4">
            <div class="max-w-4xl w-full space-y-8">

                <!-- Tarjeta de Bienvenida -->
                <div class="bg-[#e4c089] rounded-3xl shadow-lg p-8 text-center">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                        Bienvenido al Sistema de Gestión de<br>
                        Inventario de la Parroquia San Pablo<br>
                        Apóstol
                    </h1>
                </div>

                <!-- Contenedor con Logo y Descripción -->
                <div class="grid md:grid-cols-2 gap-6 items-center">

                    <!-- Logo -->
                    <div class="flex justify-center">
                        <div class="w-48 h-48 bg-gray-100 rounded-full flex items-center justify-center shadow-lg">
                            <img src="{{ asset('assets/images/icono.jpeg') }}" alt="Parroquia San Pablo Apóstol"
                                class="w-40 h-40 object-contain">
                        </div>
                    </div>

                    <!-- Descripción -->
                    <div class="bg-[#e4c089] rounded-3xl shadow-lg p-8">
                        <p class="text-gray-900 text-lg leading-relaxed text-center md:text-left">
                            Este sistema ha sido diseñado para facilitar la administración y control de los bienes de la
                            parroquia, garantizando un uso responsable y ordenado de los recursos.
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </x-layouts.app>
</x-layouts.app>