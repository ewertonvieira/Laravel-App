<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Listagem</title>
</head>

<body id="body-list">
    <div class="container-table">
        <table>
            <caption>Lista de Produtos</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Validade</th>
                    <th>Status</th>
                    <th>Categoria</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $item)
                    <tr>
                        <td>{{ $item->id }}</td>

                        <!-- Formulário para editar o produto -->
                        <form action="{{ route('produto.editar', $item->id) }}" method="POST" class="form-editar">
                            @csrf
                            @method('PUT')
                            <!-- Nome do produto -->
                            <td>
                                <input type="text" name="nome" value="{{ $item->nome }}" required>
                            </td>

                            <!-- Descrição do produto -->
                            <td>
                                <input type="text" name="descricao" value="{{ $item->descricao }}" required>
                            </td>

                            <!-- Preço do produto -->
                            <td>
                                <input type="text" name="valor" value="{{ $item->valor }} R$" required>
                            </td>

                            <!-- Data de validade -->
                            <td>
                                <input type="date" name="data_validade" value="{{ $item->data_validade }}" required>
                            </td>

                            <!-- Status do produto -->
                            <td>
                                <select name="ativo" required>
                                    <option value="1" {{ $item->ativo == 1 ? 'selected' : '' }}>Ativo</option>
                                    <option value="0" {{ $item->ativo == 0 ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </td>

                            <!-- Categoria -->
                            <td>
                                <input type="text" name="categoria_id" value="{{ $item->categoria_id }}" required>
                            </td>

                            <!-- Ações -->
                            <td class="acoes">
                                <button type="submit" class="btn-editar">Salvar</button>

                            </td>
                        </form>

                        <!-- Formulario de Deletar dentro da mesma célula -->
                        <td class="acoes">
                            <form action="{{ route('produto.deletar', $item->id) }}" method="POST"
                                class="form-acoes-deletar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-deletar">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>