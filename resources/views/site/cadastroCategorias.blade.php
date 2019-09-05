@extends('site.layout')

@section('titulo')
{{$titulo}}
@stop

@section('conteudo')
<form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Cadastro de  categoria de produtos</h1>
    <div>
         <div class="form-group">
            <h2>Nova categoria </h2>
            <input type="text" name="categoria" class="form-control" required minlength="6"
        </div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>
@stop

@section('textoRodape')
{{$rodape}}
@stop
