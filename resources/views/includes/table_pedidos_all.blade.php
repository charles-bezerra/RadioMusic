<table class="table shadow-1"  style="border-radius-bottom: 30px">

    <thead class="thead-dark">
        <tr style="font-size: 76%">
            <th scope="col"></th>
            <th scope="col">Faixa</th>
            <th scope="col">Usuário</th>
            <th scope="col">Detalhes</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>

    <tbody style="background-color: #F8F8FF">
        @for($i = 0; $i < $count_pedidos; $i++)
            <tr style="font-size: 76%">
                 <th>
                    <a href="#" class="btn btn-success"><img width="22px" src='/icons/icon_play.png'/></a>
                 </th>
                 <th>{{ $musicas_pedidos[$i]->nome }} - {{ $musicas_pedidos[$i]->cantor }}</th>
                 <th>{{ $users_pedidos[$i]->nome }}</th>
                 <th>{{ $pedidos[$i]->detalhes }}</th>
                 <th><a href="#" class="btn btn-primary">Curtir</a></th>
                 <th><a href="#" class="btn btn-secondary">Favoritar</a></th>
            </tr>
        @endfor
    </tbody>

</table>