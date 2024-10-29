<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
/**
     * Exibe a lista de categorias.
     */
    public function index()
    {
        $categorias = Categoria::all(); // Busca todas as categorias
        return view('categoria.index', compact('categorias')); // Envia para a view
    }

    /**
     * Armazena uma nova categoria no banco de dados.
     */
    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'cat_nome' => 'required|string|max:255',
            'cat_descricao' => 'required|string',
        ]);

        // Criação da categoria
        Categoria::create($request->all());

        // Redireciona para a lista com mensagem de sucesso
        return redirect()->route('categoria.index')->with('success', 'Categoria criada com sucesso!');
    }

    /**
     * Exibe a página de edição para uma categoria.
     */
        public function edit($id)
    {
        $categoria = Categoria::findOrFail($id); // Busca a categoria pelo ID
        return view('categoria.edit', compact('categoria')); // Envia para a view de edição
    }
    /**
     * Atualiza uma categoria no banco de dados.
     */
    public function update(Request $request, $id)
    {
        // Validação dos campos
        $request->validate([
            'cat_nome' => 'required|string|max:255',
            'cat_descricao' => 'required|string',
        ]);

        // Atualiza a categoria
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        // Redireciona para a lista com mensagem de sucesso
        return redirect()->route('categoria.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id); // Busca a categoria pelo ID
        $categoria->delete(); // Exclui a categoria

        // Redireciona para a lista com mensagem de sucesso
        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso!');
    }
}




