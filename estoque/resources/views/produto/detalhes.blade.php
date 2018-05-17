        @extends('layout.principal')
        @section('conteudo')
        <h1 class="text-center my-4">Detalhes do produto {{$p->nome}}</h1>
        <ul >
          <li style="list-style-type:none;" class="text-center">Valor: {{$p->valor}}</li>
          <li style="list-style-type:none;" class="text-center">Descrição: {{$p->descricao}}</li>
          <li style="list-style-type:none;" class="text-center">Quantidade: {{$p->quantidade}}</li>
        </ul>
        @stop
