<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App precificador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="./Style/Style.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Share Tech Mono', monospace;">
    <header>
        <div class="container" id="header">
            <h6 id="logo"><i class="fa-solid fa-calculator"></i> App precificador</h6>
        </div>
    </header>
    <section id="sec-geral" class="container">
        <div class="row">

            <div class="col-lg-4" id="table-input">

                <p class="text-danger">Obs: valores acima de <b>999.00</b> , não utilize a vígula como separador.</p>
                <h6><i class="fa-solid fa-pen"></i> Preencha o formulário abaixo</h6>
                <hr>

                <label>Valor do produto(R$)</label>
                <input id="Valor-produto" class="form-control" value="0.00">
                <label>Valor do frete(R$)</label>
                <input id="Frete-produto" class="form-control" value="0.00">
                <p id="separador">-----------------------</p>

                <label>Soma das taxas do GateWay de pagamento por venda: CRÉDITO + DÉBITO(%)</label>
                <input id="Taxa" class="form-control" value="0.00">
                <label>Margem sobre a venda (%)</label>
                <input id="Margem" class="form-control" value="0.00">
                <button class="btn btn-dark" onclick="Calcular()"><i class="fa-solid fa-square-poll-vertical"></i> Calcular</button>
                <hr>
                <div id="img">
                    <p>Equação utilizada para a precificação.</p>
                    <img src="./img/Equação.jpg" alt="img_">
                </div>

                <hr>

            </div>
            <div class="col-lg-8" id="table-result">
                <div id="painel-result">
                    <label id="Result-calc">(Custo total: Valor do produto + frete + taxas) ---> R$ <b id="Result_soma_frete_mais_protudo_mais_taxa">0.00</b></label>

                    <label id="Result-calc">(Margem desejada) ---> % <b id="result_margem">0.00</b></label>

                    <label id="Result-calc">(Preço final de venda R$) ---> R$ <b id="Result_Peco_final">0.00</b></label>

                    <p id="separador">---------- Distribuição dos valores ----------</p>
                    <label id="Result-calc">(Valor da taxa na realização da venda.) ---> R$ -<b id="Valor_da_taxa">0.00</b></label>
                    <label id="Result-calc">(Efetuando a compra do produto no fornecedor R$) ---> R$ -<b id="efetuando_compra_produto">0.00</b></label>
                    <label id="Result-calc">(Efetuando o pagamento do frete R$) ---> R$ -<b id="pagamento_do_frete">0.00</b></label>

                    <label id="Result-calc">(Margem por produto vendido R$) ---> R$ <b id="result_margem_final">0.00</b></label>




                    <p id="separador">---------- Projeção de vendas ----------</p>

                    <label>Soma dos seus custos fixos mensais R$</label>
                    <input id="input_custo_fixo" class="form-control" value="0.00">

                    <label>Margem líquida unitária do produto R$</label>
                    <input id="input_margem" class="form-control" value="0.00">

                    <label>Projetar quantidade de unidades vendidas</label>
                    <input id="input_quantidade" class="form-control" value="0">
                    <br>
                    <label id="result_projecao">R$ <b id="result">0.00</b> em lucro/prejuízo após pagar os custos fixos... </label>
                    <button id="btn" class="btn btn-dark" onclick="Projetar()">Realizar projeção</button>


                </div>

            </div>
        </div>

    </section>

    <script src="./Script.js"></script>
    <script src="https://kit.fontawesome.com/0a2ff8b21c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>