<?php

namespace App\Http\Controllers;
use App\Models\registroModel;
use Illuminate\Http\Request;

class registroController extends Controller
{
    public function paginaInicial(){
        return view('paginas.index');
    }//fim da pagina inicial

    public function cadastrar(){
        return view('paginas.cadastrar');
    }//fim do metodo de direcionamento

    public function inserir(Request $request){
        $nome             = $request->input('nome');
        $data             = $request->input('dataLancamento');
        $genero           = $request->input('genero');
        $avaliacaoPessoal = $request->input('avaliacaoPessoal');
        $comentario       = $request->input('comentario');
        //chamando model
        $model = new registroModel();

        $model->nome             = $nome;
        $model->dataLancamento   = $data;
        $model->genero           = $genero;
        $model->avaliacaoPessoal = $avaliacaoPessoal;
        $model->comentario       = $comentario;

        $model->save();
        return redirect('/');
    }//fim do metodo inserir

    public function consultar(){
        $ids = registroModel::all();
        return view('paginas.consultar',compact('ids'));
    }//fim do metodo de consulta

    public function editar($id){
        $dado = registroModel::findOrFail($id);
        return view('paginas.editar', compact('dado'));
    }//fim do metodo editar

    public function atualizar(Request $request, $id){
        registroModel::where('id', $id)->update($request->all());
        return redirect('/consultar');
    }//fim do metodo atualizar

    public function excluir(Request $request, $id){
        registroModel::where('id', $id)->delete($request->all());
        return redirect('/consultar');
    }//fim do metodo excluir
}//fim da classe
