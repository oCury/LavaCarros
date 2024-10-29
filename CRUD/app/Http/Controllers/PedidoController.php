<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    // Listar os pedidos do usuário logado
    public function index()
    {
        $pedidos = Pedido::where('user_id', Auth::id())->with('produtos')->get();
        return view('pedidos.index', compact('pedidos'));
    }

    // Mostrar detalhes de um pedido específico
    public function show($id)
    {
        $pedido = Pedido::with('produtos')->findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

     // Armazenar um novo pedido
     public function store(Request $request)
     {
         // Validação básica
         $request->validate([
             'produtos' => 'required|array', // Exige um array de produtos
         ]);

         // Criar um novo pedido para o usuário autenticado
         $pedido = Pedido::create([
             'user_id' => Auth::id(),
             'status' => 'Em andamento',
             'total' => 0, // Atualizaremos após adicionar os produtos
         ]);

         $total = 0;

         // Adicionar os produtos ao pedido
         foreach ($request->produtos as $produto) {
             $pedido->produtos()->attach($produto['id'], ['quantidade' => $produto['quantidade']]);
             $total += $produto['preco'] * $produto['quantidade'];
         }

         // Atualizar o valor total do pedido
         $pedido->update(['total' => $total]);

         return redirect()->route('pedidos.index')->with('mensagem-sucesso', 'Pedido realizado com sucesso!');
     }
}
