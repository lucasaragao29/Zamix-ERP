<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/estoque',function(){
    return view('estoque');
});
Route::get('/estoque/cadastro_produtos',function(){
    return view('prod_sim_comp');
});
// Produtos Unitarios
Route::get('/estoque/cadastro_produtos_simples','ProdutosController@create')->name('cadastro_produto_get');
Route::get('/estoque',function(){
    return view('estoque');
})->name('estoque');
Route::get('/estoque/consulta',function(){
    return view('produtos_sim_com');
});
Route::post('/estoque/cadastro_produtos_simples','ProdutosController@store')->name('cadastro_produto_simples');
Route::get('/estoque/produtos','ProdutosController@index')->name('produtos_tabela');
Route::get('/estoque/produtos_simples/editar/{id}','ProdutosController@edit')->name('produtos_edit_simples');
Route::post('/estoque/produtos_simples/editar/{id}','ProdutosController@update')->name('produtos_update_simples');
Route::delete('/estoque/produtos_simples/{id}','ProdutosController@destroy')->name('produtos_destroy_simples');

// Produtos Compostos
Route::get('/estoque/cadastro_produtos_comp','ProdutosComposController@create');
Route::post('/estoque/cadastro_produto_comp','ProdutosComposController@store')->name('cadastro_composto');
Route::get('/estoque/produtos_compostos','ProdutosComposController@index')->name('produtos_comp_tabela');
Route::get('/estoque/produtos_compostos/editar/{id}','ProdutosComposController@edit')->name('produtos_comp_edit');
Route::get('/estoque/produtos_compostos/editar/{id}','ProdutosComposController@update')->name('produtos_comp_edit');
Route::delete('/estoque/produtos_compostos/{id}','ProdutosComposController@destroy')->name('produtos_destroy_comp');

//Rota Usuarios
Route::get('/novo_usuario','UserController@create');
Route::post('/novo_usuario','UserController@store')->name('novo_usuario');
Route::get('/editar_usuario/{id}','UserController@show')->name('teste');
Route::get('/deletar_usuario/{id}','UserController@delete');
Route::delete('/deletar_usuario/{id}','UserController@destroy')->name('destroy_user');
Route::post('/editar_usuario/{id}','UserController@update')->name('user_update');
   

// Rota Estoque
Route::get('/requisição',function(){
    return view('requisicao');
});
Route::get('/nova_requisição',function(){
    return view('components.forms.form_req');
});
Route::get('/consultar_requição',function(){
    return view('components.forms.consul_req');
});
Route::get('/estoque/retirar_produto',function(){
    return view('components.forms.retirar_produto');
});
Route::get('/relatorio',function(){
    return view('relatorios');
});
Route::get('/', function(){
    return view('home');
});