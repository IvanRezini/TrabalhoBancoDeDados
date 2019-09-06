<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    public function cadastroCliente() {
        $titulo = "Cadastro";
        $rodape = date('Y') . ' Todos os direitos reservados.';
        return view('site.cadastroCliente', compact('titulo', 'rodape'));
    }
}
