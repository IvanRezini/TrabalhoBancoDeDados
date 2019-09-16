<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div style="background-color: #4dc0b5">
            <form action="{{route('cliente.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <h2>Nome completo </h2>
                    <input type="text" name="nomeCompleto" class="form-control" placeholder="Nome completo" required minlength="6">
                </div>

                <div class="form-group">
                    <h2>Telefone </h2>
                    <input type="text" name="telefone" class="form-control" placeholder="Telefone" required minlength="10">
                </div>

                <div class="form-group">
                    <h2>Cpf </h2>
                    <input type="text" name="cpf" class="form-control" placeholder="Cpf" required minlength="6">
                </div>
                <div class="form-group">
                    <h2>Pais </h2>
                    <input type="text" name="pais" class="form-control" placeholder="Pais" required minlength="6">
                </div>
                <div class="form-group">
                    <h2>Estado </h2>
                    <input type="text" name="estado" class="form-control" placeholder="Estado" required minlength="6">
                </div>
                <div class="form-group">
                    <h2>Cidade </h2>
                    <input type="text" name="cidade" class="form-control" placeholder="cidade" required minlength="6">
                </div>
                <div class="form-group">
                    <h2>Bairro </h2>
                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" required minlength="6">
                </div>
                <div class="form-group">
                    <h2>Rua </h2>
                    <input type="text" name="rua" class="form-control" placeholder="Rua" required minlength="6">
                </div>

                <button type="submit">Adicionar</button>
            </form>
        </div>
    </body>
</html>

