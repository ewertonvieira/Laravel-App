<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset(path: 'css/style.css') }}">
    <title>Cadastro de Produto</title>
</head>

<body>
    <form action="" method="post">
        <h1>Cadastro de Produto</h1>

        <label for="">Nome</label>
        <input type="text" name="nome" id="">

        <label for="">Valor</label>
        <input type="text" name="valor" id="">

        <label for="">Descrição</label>
        <textarea name="descricao" id="desc"></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>

</html>