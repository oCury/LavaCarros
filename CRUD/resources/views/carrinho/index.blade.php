@extends('layout')

@section('pagina_titulo', 'Carrinho de Compras')

@section('pagina_conteudo')
<div class="container mt-5">
    <h3>Seu Carrinho</h3>
    <hr>

    @if($pedidos->isEmpty())
        <p>Seu carrinho está vazio.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                    @foreach($pedido->pedido_produtos as $produto)
                        <tr>
                            <td>{{ $produto->produto->nome }}</td>
                            <td>{{ $produto->qtd }}</td>
                            <td>R$ {{ number_format($produto->produto->valor, 2, ',', '.') }}</td>
                            <td>
                                <form action="{{ route('carrinho.remover', ['id' => $produto->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">Continuar Comprando</a>
    </div>
</div>
@endsection
