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

    public function editar($id, Request $request)
    {
        $produto = Produto::findOrFail($id);

        // Validar os dados
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'valor' => 'required|numeric',
            'descricao' => 'nullable|string',
            'data_validade' => 'nullable|date',
            'ativo' => 'required|boolean',
            'categoria_id' => 'nullable|integer',
        ]);

        // Atualiza o produto
        $produto->update($validatedData);

        return redirect()->route('produto.index');
    }

}
