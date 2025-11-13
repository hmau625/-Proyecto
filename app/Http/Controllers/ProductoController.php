<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra la lista de productos.
     */
    public function index()
    {
        $productos = Producto::with('categoria')->get(); // Cargar relación
        return view('productos.index', compact('productos'));
    }

    /**
     * Muestra el formulario para crear un nuevo producto.
     */
    public function create()
    {
        $categorias = Categoria::all(); // Para llenar el select
        return view('productos.create', compact('categorias'));
    }

    /**
     * Guarda un nuevo producto.
     */
    public function store(Request $request)
    {
        $dataProducto = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "precio" => ['required', 'numeric', 'min:0'],
            "stock" => ['required', 'integer', 'min:0'],
            "descripcion" => ['nullable', 'string'],
            "categoria_id" => ['required', 'exists:categorias,id'],
        ]);

        Producto::create($dataProducto);

        return redirect()->route("productos.index")
                         ->with("success", "Producto creado correctamente.");
    }

    /**
     * Muestra los detalles de un producto.
     */
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    /**
     * Muestra el formulario para editar un producto existente.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    /**
     * Actualiza un producto existente.
     */
    public function update(Request $request, Producto $producto)
    {
        $dataUpdate = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "precio" => ['required', 'numeric', 'min:0'],
            "stock" => ['required', 'integer', 'min:0'],
            "descripcion" => ['nullable', 'string'],
            "categoria_id" => ['required', 'exists:categorias,id'],
        ]);

        $producto->update($dataUpdate);

        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Elimina un producto.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado correctamente.');
    }
}
