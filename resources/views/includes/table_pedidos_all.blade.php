@include('includes.head')
<table class="table shadow-1"  style="border-radius-bottom: 30px">

    <thead class="thead-dark">
        <tr>
            <th scope="col">Ordem</th>
            <th scope="col">Música</th>
            <th scope="col">Cantor</th>
            <th scope="col">Pedido</th>
            <th scope="col">Pedido</th>
            <th scope="col">Pedido</th>
        </tr>
    </thead>

    <tbody style="background-color: #F8F8FF">
        @for($i = 0; $i < $count; $i++)
            <tr>
                 <th>{{ $musicas[$i]->id }}</th>
                 <th>{{ $musicas[$i]->nome }}</th>
                 <th>{{ $musicas[$i]->cantor }}</th>
                 <th>{{ $users[$i]->nome }}</th>
                 <th></th>
                 <th></th>
            </tr>
        @endfor
    </tbody>

</table>