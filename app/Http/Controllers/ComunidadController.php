<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ComunidadController extends Controller
{
    public function index()
    {
        //$comunidades = DB::table('comunidad')->where('id', Auth::user()->comunidad_id)->get();
        $comunidades = DB::table('comunidad')->get();
        return view('comunidades.index', compact('comunidades'));
    }
    public function details($id)
    {
        $comunidad = DB::table('comunidad')->where('id', $id)->first();
        return view('comunidades.details', compact('comunidad'));
    }

    public function inventory()
    {
        return view('comunidades.inventory');
    }
}
