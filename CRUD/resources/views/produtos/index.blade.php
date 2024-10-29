@extends('admin_layout.index')

@section('admin_template')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Produtos</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">produtos</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de produtos
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Novo
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Opções</th>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $linha)
                            <tr>
                                <td>{{ $linha->id }}</td>
                                <td>{{ $linha->prod_nome }}</td>
                                <td>{{ $linha->prod_descricao }}</td>
                                <td>{{ $linha->categoria->cat_nome }}</td>
                                <td>
                                    <a href='{{ route('categoria_upd', ['id' => $linha->id]) }}' class='btn btn-success'>
                                        <li class='fa fa-pencil'></li>
                                    </a>
                                    |
                                    <a href='{{ route('categoria_ex', ['id' => $linha->id]) }}' class='btn btn-danger'>
                                        <li class='fa fa-trash'></li>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="{{ route('novo_produto') }}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="cat_id" name="cat_id" aria-label="Selecione a categoria">
                                            @foreach($categorias as $item)
                                                <option value="{{ $item->id }}">{{ $item->cat_nome }}</option>
                                            @endforeach
                                        </select>
                                        <label for="cat_id">Categoria</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="prod_nome" name="prod_nome" placeholder="Nome do Produto">
                                        <label for="prod_nome">Nome do Produto</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="prod_quantidade" name="prod_quantidade" placeholder="Quantidade">
                                        <label for="prod_quantidade">Quantidade</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="prod_descricao" name="prod_descricao" placeholder="Descrição"></textarea>
                                        <label for="prod_descricao">Descrição</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
