@forelse ($pedidos as $pedido)
    <h5 class="col l6 s12 m6"> Pedido: {{ $pedido->id }} </h5>
    <h5 class="col l6 s12 m6"> Criado em: {{ $pedido->created_at->format('d/m/Y H:i') }} </h5>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Qtd</th>
                <th>Produto</th>
                <th>Valor Unit.</th>
                <th>Desconto(s)</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php $total_pedido = 0; @endphp
            @foreach ($pedido->pedido_produtos as $pedido_produto)
                <tr>
                    <td>
                        <img width="100" height="100" src="{{ url('/images/'.$pedido_produto->produto->imagem) }}">
                    </td>
                    <td class="center-align">
                        <div class="center-align">
                            <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 1)">
                                <i class="material-icons small">remove_circle_outline</i>
                            </a>
                            <span> {{ $pedido_produto->qtd }} </span>
                            <a href="#" onclick="carrinhoAdicionarProduto({{ $pedido_produto->produto_id }})">
                                <i class="material-icons small">add_circle_outline</i>
                            </a>
                        </div>
                        <a href="#" onclick="carrinhoRemoverProduto({{ $pedido->id }}, {{ $pedido_produto->produto_id }}, 0)">
                            Retirar produto
                        </a>
                    </td>
                    <td>{{ $pedido_produto->produto->nome }}</td>
                    <td>R$ {{ number_format($pedido_produto->produto->valor, 2, ',', '.') }}</td>
                    <td>R$ {{ number_format($pedido_produto->descontos, 2, ',', '.') }}</td>
                    @php
                        $total_produto = $pedido_produto->valores - $pedido_produto->descontos;
                        $total_pedido += $total_produto;
                    @endphp
                    <td>R$ {{ number_format($total_produto, 2, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <strong>Total do pedido: </strong> R$ {{ number_format($total_pedido, 2, ',', '.') }}
    </div>

    <form id="form-remover-produto" method="POST"
          action="{{ route('carrinho.remover', ['id' => $pedido_produto->id ?? '']) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">
        <input type="hidden" name="produto_id" value="{{ $pedido_produto->produto_id ?? '' }}">
        <input type="hidden" name="item" value="1">
    </form>
@empty
    <h5>Não há nenhum pedido no carrinho</h5>
@endforelse
