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
//Comentadas Mudança para Route resource
//Route::get('/categoria', 'CadastroCategoriaProdutosController@categoriaDeProdutos');
//Route::get('/cliente', 'CadastroClienteController@cadastroCliente');
//Route::get('/produto', 'CadastroNovosProdutosController@cadastroNovosProdutos');
Route::get('/', function (){
    return view('welcome');
});

Route::resource('categoria', 'CategoriaController');
