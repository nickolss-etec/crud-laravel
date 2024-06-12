<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    // Método para exibir todos os contatos
    public function index(Request $req){
        // Recupera todos os contatos do banco de dados
        $contato = Contato::all();
        // Retorna a view 'index' e passa os contatos recuperados para ela
        return view('index')->with("contato", $contato);
    }

    // Método para adicionar um novo contato
    public function adicionar(Request $req){
        // Cria uma nova instância de Contato
        $contato = new Contato;
        // Atribui os valores recebidos do formulário aos campos do contato
        $contato->nome = $req->nome;
        $contato->telefone = $req->telefone;
        $contato->email = $req->email;
        // Salva o novo contato no banco de dados
        $contato->save();
        // Redireciona de volta para a página anterior
        return redirect()->back();
    }

    // Método para editar um contato existente
    public function editar(Request $req){
        // Encontra o contato pelo ID fornecido na requisição
        $contato = Contato::find($req->id);
        // Retorna a view 'editar' com o contato encontrado
        return view('editar')->with("contato", $contato);
    }

    // Método para atualizar um contato no banco de dados
    public function atualizar(Request $req){
        // Encontra o contato pelo ID fornecido na requisição
        $contato = Contato::find($req->id);
        // Atualiza os campos do contato com os novos valores fornecidos
        $contato->update(
            [
                "nome" => $req->nome,
                "telefone" => $req->telefone,
                "email" => $req->email
            ]
        );
        // Redireciona de volta para a página anterior
        return redirect()->back();
    }

    // Método para excluir um contato do banco de dados
    public function excluir(Request $req){
        // Encontra o contato pelo ID fornecido na requisição
        $contato = Contato::find($req->id);
        // Exclui o contato do banco de dados
        $contato->delete();
        // Redireciona de volta para a página anterior
        return redirect()->back();
    }
}
