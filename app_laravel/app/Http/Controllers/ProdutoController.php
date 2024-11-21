<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produto.index');
    }

    public function cadastrar()
    {
        return view('produto.cadastrar');
    }

    public function lista()
    {
         // Recupera todos os produtos da tabela
         $produtos = Produto::all();

         // Retorna para a view, passando os produtos
         return view('produto.index', compact('produtos'));
    }
}
