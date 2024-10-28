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
}
