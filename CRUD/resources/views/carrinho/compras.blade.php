@extends('layout')

@section('pagina_titulo', 'Minhas Compras')

@section('pagina_conteudo')
    <h1>Minhas Compras</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID do Pedido</th>
                <th>Data</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->created_at->format('d/m/Y H:i') }}</td>
                    <td>R$ {{ number_format($pedido->total, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
