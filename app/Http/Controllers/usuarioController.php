<?php

namespace App\Http\Controllers;
use App\Models\usuarioModel;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function login(){
        return view('paginas.login');
    }//fim da pagina de login
    
    public function usuario(){
        return view('paginas.usuario');
    }//fim da pagina de usuario

    public function cadastrarUsuario(){
        return view('paginas.cadastrarUsuario');
    }//fim do metodo de direcionamento

    public function inserirUsuario(Request $request){
        $nome            = $request->input('nome');
        $email           = $request->input('email');
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
        $ids = usuarioModel::all();
        return view('paginas.consultarUsuario',compact('ids'));
    }//fim do metodo de consulta

    public function editarUsuario($id){
        $dado = usuarioModel::findOrFail($id);
        return view('paginas.editarUsuario', compact('dado'));
    }//fim do metodo editar

    public function atualizarUsuario(Request $request, $id){
        usuarioModel::where('id', $id)->update($request->all());
        return redirect('/consultarUsuario');
    }//fim do metodo atualizar

    public function excluirUsuario(Request $request, $id){
        usuarioModel::where('id', $id)->delete($request->all());
        return redirect('/consultarUsuario');
    }//fim do metodo excluir
}//fim da classe usuario
