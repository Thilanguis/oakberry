<?php include_once 'head.php'; ?>

<div class="menuPedidos animated zoomIn">
    <h4 id="h4pedidos">Faça seus pedidos</h4>
    <p>
        <button id="pedidos" class="btn btn-none listaPedidos" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">PEDIDOS</button>
        <button id="solicitacoes" class="btn btn-none listaPedidos" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">SOLICITAÇÕES</button>

    </p>
    <div class="row">
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
                <div class="card card-body">
                    <ul>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Artes</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Reunião / Consultoria</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
                <div class="card card-body">
                    <ul>
                        <a href="#" data-toggle='modal' data-target='#uniformes' class="listaPedidos">
                            <li class="listaPedidos">Uniformes</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Kit medidor</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Bisnaga</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Fatiador de banana</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Leitor de nota falsa</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">letrex</li>
                        </a>
                        <a href="" class="listaPedidos">
                            <li class="listaPedidos">Cardápio led</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
