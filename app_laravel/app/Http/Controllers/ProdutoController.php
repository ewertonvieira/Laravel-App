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

    public function deletar(Request $request)
    {
        $id = $request->input('id');
        $produtos = Produto::find(id: $id);
        $produtos->delete();
        return redirect()->route('produto.index');
    }

    public function editar($id, Request $request)
    {
        $produto = Produto::findOrFail($id);

        // Validar os dados
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'preco' => 'required|numeric',
            'descricao' => 'nullable|string',
        ]);

        // Atualiza o produto
        $produto->update($validatedData);

        return redirect()->route('produtos.index');
    }

}
