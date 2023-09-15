<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public function index(){
        return view('index', ['candidatos' => Candidato::all()]);
    }

    public function cadastro(){
        return view('/cadastro');
    }

    public function exibir($id){
        $candidato = Candidato::find($id);
        return view('editar', ['candidato' => $candidato]);
    }

    public function salvarCandidato(Request $dados){
        Candidato::create([
            'nome' => $dados->nome,
            'telefone' => $dados->telefone
        ]);
        echo "Candidato cadastrado com sucesso!";
    }

    public function atualizarCandidato($id, Request $dados){
        $candidato = Candidato::find($id);
        $candidato->nome = $dados->nome;
        $candidato->telefone = $dados->telefone;
        $candidato->save();
    }

    public function excluirCandidato($id){
        $candidato = Candidato::find($id);
        $candidato->delete();
    }
}
