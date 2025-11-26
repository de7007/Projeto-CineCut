<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function paginaInicial(){
        return view('paginas.index');
    }//fim da pagina inicial

    public function cadastrar(){
        return view('paginas.cadastrarUsuario');
    }//fim do metodo de direcionamento

    public function inserirUsuario(Request $request){
        $nome             = $request->input('nome');
        $email             = $request->input('email');
        $senha           = $request->input('senha');
        //chamando model
        $model = new usuarioModel();

        $model->nome             = $nome;
        $model->email            = $email;
        $model->senha            = $senha;

        $model->save();
        return redirect('/');
    }//fim do metodo inserir

    public function consultarUsuario(){
        $ids = registroModel::all();
        return view('paginas.consultarUsuario',compact('ids'));
    }//fim do metodo de consulta

    public function editarUsuario($id){
        $dado = registroModel::findOrFail($id);
        return view('paginas.editarUsuario', compact('dado'));
    }//fim do metodo editar

    public function atualizarUsuario(Request $request, $id){
        registroModel::where('id', $id)->update($request->all());
        return redirect('/consultarUsuario');
    }//fim do metodo atualizar

    public function excluirUsuario(Request $request, $id){
        registroModel::where('id', $id)->delete($request->all());
        return redirect('/consultarUsuario');
    }//fim do metodo excluir
}//fim da classe usuario
