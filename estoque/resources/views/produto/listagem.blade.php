
        @extends('layout.principal')

        @section('conteudo')
        <h1 class="text-center my-4">Listagem de produtos</h1>
        <div class="container">
        <table class="table table-bordered table-striped">
            @foreach ($produtos as $p)
              <tr class="{{$p->quantidade<=1 ? 'table-danger' : '' }}">
                <td>{{$p->nome}}</td>
                <td class="text-center">{{$p->valor}}</td>
                <td>{{$p->descricao}}</td>
                <td class="text-center">{{$p->quantidade}}</td>
                <td class="text-center">
                  <a href="/produtos/mostra/{{$p->id}}">
                    <i class="fas fa-search"></i>
                  </a>
                </td>
              </tr>
            @endforeach
        </table>
        @stop
