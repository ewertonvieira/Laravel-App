<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Listagem</title>
	<style>
		/
	</style>
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
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($produtos as $item)
					<tr>
						<!-- ID não editável -->
						<td>{{ $item->id }}</td>
						
						<!-- Nome do produto: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type="text" name="nome" value="{{ $item->nome }}" required>
							</form>
						</td>
						
						<!-- Descrição do produto: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type="text" name="descricao" value="{{ $item->descricao }}" required>
							</form>
						</td>
						
						<!-- Preço do produto: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type="text" name="valor" value="{{ $item->valor }}" required>
							</form>
						</td>

						<!-- Data de validade: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type="date" name="data_validade" value="{{ $item->data_validade }}" required>
							</form>
						</td>
						
						<!-- Status: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<select name="ativo" required>
									<option value="1" {{ $item->ativo == 1 ? 'selected' : '' }}>Ativo</option>
									<option value="0" {{ $item->ativo == 0 ? 'selected' : '' }}>Inativo</option>
								</select>
							</form>
						</td>
						
						<!-- Categoria: editable -->
						<td>
							<form action="{{ route('produto.editar', $item->id) }}" method="POST">
								@csrf
								@method('PUT')
								<input type="text" name="categoria_id" value="{{ $item->categoria_id }}" required>
							</form>
						</td>
						
						<!-- Ações -->
						<td class="acoes">
							<!-- Botão para atualizar o produto -->
							<button type="submit" class="btn-editar" id="form-acoes">Salvar</button>
							
							<!-- Formulario de Deletar -->
							<form action="{{ route('produto.deletar') }}" method="POST" class="form-acoes">
								@csrf
								<input type="hidden" name="id" value="{{ $item->id }}">
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
