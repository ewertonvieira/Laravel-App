<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index()
    {
        // Recupera todos os produtos da tabela
        $produtos = Produto::all();

        // Retorna para a view, passando os produtos
        return view('produto.index', compact('produtos'));
    }

    public function cadastrar()
    {
        return view('produto.cadastrar');
    }

    public function deletar(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->delete();

        return redirect()->route('produto.index');
    }

    public function editar(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $valor = str_replace(' R$', '', $request->valor);
        $valor = floatval(str_replace(',', '.', $valor));

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'valor' => $valor,
            'data_validade' => $request->data_validade,
            'ativo' => $request->ativo,
            'categoria_id' => $request->categoria_id,
        ]);

        return redirect()->route('produto.index');
    }


}
