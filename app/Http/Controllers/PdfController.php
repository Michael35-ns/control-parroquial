<?php

namespace App\Http\Controllers;

use App\Models\Comunidad;
use App\Models\EstadoItem;
use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PdfController extends Controller
{
    public function generarPdf($id)
    {
        $user = Auth::user();

        if ($user->rol && $user->rol->nombre === 'ADMIN') {
            // Admin: acceso total
            $espacio = \App\Models\Espacio::find($id);
            $comunidad = $espacio?->comunidad;
        } else {
            // Usuario normal: acceso solo a su comunidad
            $comunidad = Comunidad::with('espacios')->find($user->comunidad_id);
            $espacio = $comunidad?->espacios()->where('id', $id)->first();
        }

        if (!$espacio) {
            abort(404, 'El espacio no existe o no tiene permiso para acceder.');
        }

        $items = Inventario::with('estadoItem')
            ->where('espacio_id', $id)
            ->get();

        $fecha = now()->format('d/m/Y');

        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView(
            'pdf.reporte',
            compact('items', 'fecha', 'comunidad', 'espacio')
        );

        return $pdf->stream("inventario_{$id}.pdf");
    }
}
