<div class="min-h-screen  flex items-center justify-center p-4">
    <div class="w-full max-w-md">
        <!-- Card con efecto de vidrio -->
        <div class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-8 space-y-6">
            
            <!-- Ícono religioso -->
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-orange-400 to-yellow-500 rounded-full shadow-lg mb-4">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ __('Recupera tu Acceso') }}</h1>
                <p class="text-gray-600 italic">"Busca y encontrarás"</p>
                <p class="text-sm text-gray-500 mt-2">{{ __('Ingresa tu correo para recibir el enlace de recuperación') }}</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded">
                    <p class="text-green-700 text-sm text-center">{{ session('status') }}</p>
                </div>
            @endif

            <!-- Formulario -->
            <form method="POST" wire:submit="sendPasswordResetLink" class="space-y-6">
                @csrf
                
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Correo Electrónico') }}
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                            </svg>
                        </div>
                        <input 
                            wire:model="email"
                            id="email"
                            type="email" 
                            required 
                            autofocus
                            placeholder="correo@ejemplo.com"
                            class="w-full pl-10 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:border-orange-400 focus:ring-2 focus:ring-orange-200 transition-all outline-none"
                        />
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Botón de Enviar -->
                <button 
                    type="submit"
                    class="w-full bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white font-semibold py-3 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200"
                >
                    {{ __('Enviar enlace de recuperación') }}
                </button>
            </form>

            <!-- Separador decorativo -->
            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">✦</span>
                </div>
            </div>

            <!-- Link de regreso -->
            <div class="text-center">
                <span class="text-sm text-gray-600">{{ __('O, regresar a') }}</span>
                <a 
                    href="{{ route('login') }}" 
                    wire:navigate
                    class="text-sm font-semibold text-orange-600 hover:text-orange-700 ml-1 transition-colors"
                >
                    {{ __('iniciar sesión') }}
                </a>
            </div>

            <!-- Versículo decorativo -->
            <div class="text-center pt-4 border-t border-gray-100">
                <p class="text-xs text-gray-400 italic">Mateo 7:7</p>
            </div>
        </div>

        <!-- Elemento decorativo inferior -->
        <div class="text-center mt-6">
            <div class="inline-flex items-center gap-1 text-white/80">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                </svg>
                <span class="text-sm">Bendiciones y paz</span>
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z"/>
                </svg>
            </div>
        </div>
    </div>
</div>