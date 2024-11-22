<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use Symfony\Component\Routing\Router;


Route::get('/produto/cadastro', [ProdutoController::class, 'cadastrar']) ->name(name: 'produto.cadastrar');

Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

Route::delete('/produto/{id}', [ProdutoController::class, 'deletar'])->name('produto.deletar');

Route::put('/produto/{id}', [ProdutoController::class, 'editar'])->name('produto.editar');