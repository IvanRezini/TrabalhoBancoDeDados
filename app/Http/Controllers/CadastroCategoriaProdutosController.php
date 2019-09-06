<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroCategoriaProdutosController extends Controller
{  
    public function categoriaDeProdutos() {
        $titulo = "Categoria";
        $rodape = date('Y') . ' Todos os direitos reservados.';
        return view('site.cadastroCategorias', compact('titulo', 'rodape'));
    }
}
