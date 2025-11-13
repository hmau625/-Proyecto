<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    public function create()
    {
        return view('vendedores.create');
    }

    public function store(Request $request)
    {
        $dataVendedor = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "cargo" => ['required', 'string', 'max:255'],
            "telefono" => ['required', 'string', 'max:255'],
        ]);

        Vendedor::create($dataVendedor);
        return redirect()->route("vendedores.index");
    }

    public function edit(Vendedor $vendedor)
    {
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update(Request $request, Vendedor $vendedor)
    {
        $dataUpdate = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "cargo" => ['required', 'string', 'max:255'],
            "telefono" => ['required', 'string', 'max:255'],
        ]);

        $vendedor->update($dataUpdate);
        return redirect()->route('vendedores.index');
    }

    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();
        return redirect()->route('vendedores.index');
    }
}
