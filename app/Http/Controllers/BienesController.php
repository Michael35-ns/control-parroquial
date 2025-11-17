<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BienesController extends Controller
{


    public function index()
    {
        return view('stock.index');
    }

    public function create()
    {
        $user = Auth::user();

        // ✅ Obtener los tipos de espacios
        if ($user->rol_id == 1) {
            $tiposEspacios = DB::table('tipos_espacios')->get();
        } else {
            $tiposEspacios = DB::table('tipos_espacios')
                ->whereIn('id', [2, 3])
                ->get();
        }

        $estados = DB::table('estados_items')->get();
        return view('stock.create', compact('tiposEspacios', 'estados'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'cantidad' => 'required|integer|min:0',
            'tipo_espacio_id' => 'required|integer', // ✅ Cambiar nombre
            'estado_item_id' => 'required|integer'
        ]);

        $validated['fecha_registro'] = now();
        $tipoEspacioId = $request->input('tipo_espacio_id');

        // ✅ Buscar por tipo_espacio_id, no por id
        $espacio = Auth::user()
            ->comunidad
            ->espacios()
            ->where('tipo_espacio_id', $tipoEspacioId)
            ->firstOrFail();

        $validated['espacio_id'] = $espacio->id;

        Inventario::create($validated);

        return redirect()->route('bienes.index')
            ->with('success', '¡Registro creado con éxito!');
    }

public function edit(int $id)
{
    $user = Auth::user();
    $bien = Inventario::findOrFail($id);
    
    // Verificar que el bien pertenece a un espacio de la comunidad del usuario
    if ($bien->espacio->comunidad_id !== $user->comunidad_id) {
        abort(403, 'No tienes permiso para editar este bien');
    }
    
    // ✅ Cargar tipos de espacios según el rol
    if ($user->rol_id == 1) {
        $tiposEspacios = DB::table('tipos_espacios')->get();
    } else {
        $tiposEspacios = DB::table('tipos_espacios')
            ->whereIn('id', [2, 3])
            ->get();
    }
    
    $estados = DB::table('estados_items')->get();
    
    return view('stock.edit', [
        'espacios' => $tiposEspacios,
        'estados' => $estados,
        'bien' => $bien
    ]);
}

public function update(Request $request, int $id)
{
    $bien = Inventario::findOrFail($id);
    $user = Auth::user();
    
    // Verificar que el bien pertenece a la comunidad del usuario
    if ($bien->espacio->comunidad_id !== $user->comunidad_id) {
        abort(403, 'No tienes permiso para editar este bien');
    }
    
    $validated = $request->validate([
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'cantidad' => 'required|integer|min:0',
        'tipo_espacio_id' => 'required|integer', // ✅ Cambiar a tipo_espacio_id
        'estado_item_id' => 'required|integer'
    ]);
    
    $tipoEspacioId = $request->input('tipo_espacio_id');
    
    // ✅ Convertir tipo_espacio_id al espacio_id real de la comunidad
    $espacio = $user->comunidad
        ->espacios()
        ->where('tipo_espacio_id', $tipoEspacioId)
        ->firstOrFail();
    
    $validated['espacio_id'] = $espacio->id;
    
    // Remover tipo_espacio_id del array (no existe en la tabla inventarios)
    unset($validated['tipo_espacio_id']);
    
    $bien->update($validated);
    
    return redirect()->route('bienes.index')
        ->with('success', '¡Registro editado con éxito!');
}
}
