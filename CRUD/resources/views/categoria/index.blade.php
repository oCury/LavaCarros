@extends('admin_layout.index')

@section('admin_template')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Categorias</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de Categorias
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Novo
                        </a>
                    </div>
                </div>

                <div class="table-responsive mt-4">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $linha)
                                <tr>
                                    <td>{{ $linha->id }}</td>
                                    <td>{{ $linha->cat_nome }}</td>
                                    <td>{{ $linha->cat_descricao }}</td>
                                    <td>
                                        <a href="{{ route('categoria.edit', $linha->id) }}"
                                        class="btn btn-success me-2">
                                            <i class="fa fa-pencil"></i> Editar
                                        </a>

                                        <form action='{{ route('categoria.destroy', ['id' => $linha->id]) }}'
                                              method='POST' class='d-inline'>
                                            @csrf
                                            @method('DELETE')
                                            <button type='submit' class='btn btn-danger'>
                                                <i class='fa fa-trash'></i> Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal de Criação -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('categoria.store') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nova Categoria</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="cat_nome" name="cat_nome"
                                       placeholder="Digite o nome da categoria" required>
                                <label for="cat_nome">Nome da Categoria</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="cat_descricao" name="cat_descricao"
                                          placeholder="Descrição da categoria" required></textarea>
                                <label for="cat_descricao">Descrição</label>
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
    </div>
@endsection
