<?php

namespace App\Livewire;

use App\Models\Inventario;
use App\Models\Espacio;
use Livewire\Component;

class BienesComunidad extends Component
{
    public $comunidadId;
    public $titulo;
    public $items = [];
    public $espaciosConItems = [];
    
    public function mount($comunidadId, $titulo)
    {
        $this->comunidadId = $comunidadId;
        $this->titulo = $titulo;
        $this->loadItems();
    }

    public function loadItems()
    {
        $espacios = Espacio::where('comunidad_id', $this->comunidadId)->get();
        $this->espaciosConItems = $espacios->map(function ($espacio) {
            $espacio->items = Inventario::where('espacio_id', $espacio->id)->get();
            return $espacio;
        });
    }

    public function eliminar($id)
    {
        Inventario::findOrFail($id)->delete();
        $this->loadItems();

        $this->dispatch('show-alert', [
            'type' => 'success',
            'message' => '¡Ítem eliminado correctamente!'
        ]);
    }

    public function render()
    {
        return view('livewire.bienes-comunidad');
    }
}
