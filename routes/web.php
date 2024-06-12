<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

// Rota para a página inicial, onde exibimos todos os contatos
Route::get("/", [ContatoController::class, "index"]);

// Rota para adicionar um novo contato, usando o método 'adicionar' do ContatoController
Route::post("/adicionar", [ContatoController::class, "adicionar"]);

// Rota para editar um contato específico, onde '{id}' é o ID do contato a ser editado
Route::get("/editar/{id}", [ContatoController::class, "editar"]);

// Rota para atualizar os dados de um contato específico, onde '{id}' é o ID do contato a ser atualizado
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);

// Rota para excluir um contato específico, onde '{id}' é o ID do contato a ser excluído
Route::get("/excluir/{id}", [ContatoController::class, "excluir"]);
