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
            <a href="{{route('categoria.create')}}">Adicionar Categoria</a><br/><br/>
            <!-- Listagem de cateorias -->
            <table style="width: 50%"  border="1">
                <thead style="text-align: center">
                    <tr>
                        <td>Codigo</td>
                        <td>Nome</td>
                        <td>Ação</td>
                    </tr>              
                </thead>
                <tbody style="text-align: center">
                    @foreach($categorias as $c)

                    <tr>
                        <td>{{$c->codcat}}</td>
                        <td>{{$c->nomcat}}</td>
                        <td>
                            <button onclick="">Editar</button>
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

