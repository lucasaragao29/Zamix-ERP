<?php

namespace App\Http\Controllers;

use App\ProdutosModel;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('components.forms.form_users');
    }
    public function store(Request $request){
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'senha'=>$request->senha
        ]);
        return view('components.forms.form_users');
    }
    public function show($id){
        $usuario=User::FindOrFail($id);
       
        return view('components.forms.form_users_edit',['usuario'=>$usuario]);
    }
    public function update(Request $request, $id){
        $usuario = User::FindOrFail($id);
        $usuario->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'senha'=>$request->senha,
        ]);
    return view('estoque');
    }

    public function delete($id){
        $usuario= User::findOrFail($id);
        return view('components.forms.form_delete_user',['usuario'=>$usuario]);
    }

    public function destroy($id){
        $usuario=User::findOrFail($id);
        $usuario->delete();
        
        return view('home') ;
    }
}
