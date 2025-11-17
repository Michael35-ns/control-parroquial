<?php

namespace App\Livewire;

use App\Models\Inventario;
use App\Models\Espacio;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BienesEspacio extends Component
{
    public $espacioId;
    public $titulo;
    public $items = [];

    public function mount($espacioId, $titulo)
    {
        $this->espacioId = $espacioId;
        $this->titulo = $titulo;
        
        // ✅ Verificar que el usuario tenga acceso a este espacio
        $this->verificarAcceso();
        $this->loadItems();
    }

    protected function verificarAcceso()
    {
        $user = Auth::user();
        $espacio = Espacio::find($this->espacioId);
        
        // Verificar que el espacio pertenece a la comunidad del usuario
        if (!$espacio || $espacio->comunidad_id !== $user->comunidad_id) {
            abort(403, 'No tienes acceso a este espacio');
        }
        
        // Si no es admin, no puede ver Casa Cural (tipo_espacio_id = 1)
        if ($user->rol_id != 1 && $espacio->tipo_espacio_id == 1) {
            abort(403, 'No tienes acceso a este espacio');
        }
    }

    public function loadItems()
    {
        $this->items = Inventario::where('espacio_id', $this->espacioId)
            ->get();
    }

    public function eliminar($id)
    {
        $item = Inventario::findOrFail($id);
        
        // ✅ Verificar que el item pertenece al espacio correcto
        if ($item->espacio_id !== $this->espacioId) {
            abort(403);
        }
        
        $item->delete();
        $this->loadItems();

        $this->dispatch('show-alert', [
            'type' => 'success',
            'message' => '¡Ítem eliminado correctamente!'
        ]);
    }

    public function render()
    {
        return view('livewire.bienes-espacio');
    }
}