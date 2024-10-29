<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produto;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
        public function index()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }
    public function compras()
    {
        $pedidos = Pedido::where('user_id', Auth::id())->get();

        return view('carrinho.compras', compact('pedidos'));
    }

    // Adicionar um produto ao carrinho
    public function adicionar(Request $request)
    {
        $carrinho = session()->get('carrinho', []);

        // Adiciona o plano ao carrinho
        $carrinho[] = [
            'nome' => $request->nome,
            'preco' => $request->preco,
        ];

        // Armazena o carrinho atualizado na sessão
        session()->put('carrinho', $carrinho);
        session()->flash('mensagem-sucesso', 'Plano adicionado ao carrinho com sucesso!');

        return redirect()->back();
    }

    // Remover um item do carrinho
    public function remover($id)
    {
        $pedido = Pedido::findOrFail($id);

        // Implementar lógica de remoção (por exemplo, deletar pedido ou produto do carrinho)
        $pedido->delete();

        return redirect()->route('carrinho.index')->with('mensagem-sucesso', 'Produto removido do carrinho!');
    }

    // Limpar todo o carrinho do usuário
    public function limpar()
    {
        Carrinho::where('user_id', Auth::id())->delete();

        return redirect()->route('carrinho.index')->with('success', 'Carrinho esvaziado!');
    }
}
