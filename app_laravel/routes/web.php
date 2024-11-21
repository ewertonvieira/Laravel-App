<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use Symfony\Component\Routing\Router;


Route::get('/produto/cadastro', [ProdutoController::class, 'cadastrar']) ->name(name: 'produto.cadastrar');

Route::get('/', [ProdutoController::class, 'lista'])->name('produto.index');
