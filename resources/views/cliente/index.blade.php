<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

         <script>

            window.onload = function () {
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body>
        <div style="background-color: #4dc0b5">
             <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/><br/>
            <!-- Listagem de clientes -->
            <table style="width: 50%"  border="1">
                <thead style="text-align: center">
                    <tr>
                        <td>CodCli</td>
                        <td>Nome</td>
                        <td>Cpf</td>
                        <td>Cidade</td>
                        <td>Bairro</td>
                        <td>Rua</td>
                        <td>Numero</td>
                        <td>País</td>
                        <td>Telefone</td>
                        <td>Açao</td>
                    </tr>              
                </thead>
                <tbody style="text-align: center">
                    @foreach($cliente as $c)

                    <tr>
                        <td>{{$c->codcli}}</td>
                        <td>{{$c->nomcli}}</td>
                        <td>{{$c->cpfcli}}</td>
                        <td>{{$c->cidcli}}</td>
                        <td>{{$c->endcli}}</td>
                        <td>{{$c->baicli}}</td>
                        <td>{{$c->numcli}}</td>
                        <td>{{$c->ufcli}}</td>7
                        <td>{{$c->telcli}}</td>
                  
                        <td>teste
                           <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                            <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Excluir</button>
                                    
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </body>
</html>
