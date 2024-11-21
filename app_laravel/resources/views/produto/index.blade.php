<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
	<title>Listagem</title>
</head>

<body id="body-list">
	<div>
		<h1>Listagem de Produtos</h1>

		<ul>
			@foreach ($produtos as $item)
			<li><strong>Nome: </strong>{{$item->nome}},
				<strong>Descriçao: </strong> {{$item->descricao}},
				<strong>Preço:</strong> {{$item->valor}} R$,
				<strong>Status: </strong>{{$item->ativo}},
				<strong>Categoria: </strong> {{$item->categoria_id}}
			</li>
			@endforeach
		</ul>
	</div>

</body>

</html>