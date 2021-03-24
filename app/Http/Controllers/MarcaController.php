<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Controllers\MarcaController;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(Request $request)
    {
        $marcas = Marca::all();

        return view('Marca.index')->with('marcas', $marcas);
    }    
}
