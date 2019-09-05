<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroNovosProdutosController extends Controller
{
   public function cadastroNovosProdutos() {
        $titulo = "Cadastro produtos";
        $rodape = date('Y') . ' Todos os direitos reservados.';
        return view('site.cadastroDeProdutos', compact('titulo', 'rodape'));
    }
}
