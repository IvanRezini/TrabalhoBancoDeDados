@extends('site.layout')

@section('titulo')
{{$titulo}}
@stop

@section('conteudo')
<div class="container">
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Cadastro de produtos</h1>
        <div>
            <div class="form-group">
                <h2>Nome </h2>
                <input type="text" name="nomeProduto" class="form-control" required minlength="6"
            </div>
            <div class="form-group">
                <h2>Descriçao </h2>
                <input type="text" name="descricao" class="form-control" required minlength="6"
            </div>
            <div class="form-group">
                <h2>Valor </h2>
                <input type="number" name="valor" class="form-control" required minlength="6"
            </div>

        </div>
        <h2>Categoria </h2>
        <select class="custom-select" id="inputGroupSelect01">
            <option selected>Seleçao</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
</div>
<div class="form-group">
    <h2>Valor </h2>
    <input type="text" name="descricao" class="form-control" required minlength="6"
</div>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
</form>
</div>
@stop

@section('textoRodape')
{{$rodape}}
@stop