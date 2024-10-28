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
        // Buscando os pedidos do usuário logado
        $pedidos = Pedido::where('user_id', Auth::id())
                         ->where('status', 'Pendente')
                         ->with('produtos')
                         ->get();

        // Retornando a view com os pedidos
        return view('carrinho.index', compact('pedidos'));
    }

    // Adicionar um produto ao carrinho
    public function adicionar(Request $request, $produtoId)
    {
        $produto = Produto::findOrFail($produtoId);

        $itemCarrinho = Carrinho::where('produto_id', $produtoId)
                                ->where('user_id', Auth::id())
                                ->first();

        if ($itemCarrinho) {
            // Atualiza a quantidade se o produto já estiver no carrinho
            $itemCarrinho->quantidade += $request->input('quantidade', 1);
            $itemCarrinho->save();
        } else {
            // Cria um novo item no carrinho
            Carrinho::create([
                'produto_id' => $produtoId,
                'quantidade' => $request->input('quantidade', 1),
                'user_id' => Auth::id(),
            ]);
        }

        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho!');
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
