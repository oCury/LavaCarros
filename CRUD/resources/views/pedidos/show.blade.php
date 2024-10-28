@extends('layouts.app')

@section('title', 'Detalhes do Pedido')

@section('content')
<div class="container">
    <h3>Detalhes do Pedido #{{ $pedido->id }}</h3>
    <hr>

    <p><strong>Status:</strong> {{ $pedido->status }}</p>
    <p><strong>Total:</strong> R$ {{ $pedido->total }}</p>

    <h4>Produtos</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido->produtos as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->pivot->quantidade }}</td>
                    <td>R$ {{ $produto->preco }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
