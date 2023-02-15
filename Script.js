

function Calcular() {

    let ValorProduto = parseFloat(document.getElementById('Valor-produto').value);
    let ValorFrete = parseFloat(document.getElementById('Frete-produto').value);
    let Taxa = parseFloat(document.getElementById('Taxa').value);
    let Margem = parseFloat(document.getElementById('Margem').value);


    // --------------------------------------------------------------------------------------------//


    // Somando o valor do produto + frete...
    let Soma_produto_com_frete = ValorProduto + ValorFrete;
    // Acahando percentual da taxa sobre a soma do produto com o frete....
    let percentual = Soma_produto_com_frete / 100 * Taxa;
    // Somando valor do produto + frete com o percentual achado....
    let percentual_com_valorProduto_mais_frete = Soma_produto_com_frete + percentual;
    // formatendo resultado geral...
    let percentual_com_valorProduto_mais_frete_format = percentual_com_valorProduto_mais_frete.toFixed(2);

    // fazendo a impressão do resultado geral na tela...
    let Result_percentual_com_valorProduto_mais_frete = document.getElementById('Result_soma_frete_mais_protudo_mais_taxa');
    Result_percentual_com_valorProduto_mais_frete.innerHTML = percentual_com_valorProduto_mais_frete_format;


    // fazendo a impressão do valor da margem na tela...
    let valor_margem = Margem.toFixed(2)
    let result_margem = document.getElementById('result_margem');
    result_margem.innerHTML = valor_margem;


    // Calculando o preço final de venda...
    let Valor_da_margem_em_decimal = Margem / 100;
    let preco_de_venda = percentual_com_valorProduto_mais_frete / (1 - Valor_da_margem_em_decimal);
    let preco_de_venda_format = preco_de_venda.toFixed(2);

    // fazendo a impresão do preço final na tela...
    let result_preco_final = document.getElementById('Result_Peco_final');
    result_preco_final.innerHTML = preco_de_venda_format;

    // --------------------------------------------------------------------------------------------//

    // impressão do valor da taxa...
    let result_valor_da_taxa = document.getElementById('Valor_da_taxa');
    let taxa_format = percentual.toFixed(2);

    result_valor_da_taxa.innerHTML = taxa_format;

    // impressão do valor do produto...
    let efetuando_compra_produto = document.getElementById('efetuando_compra_produto');
    let efetuando_compra_produto_format = ValorProduto.toFixed(2);
    efetuando_compra_produto.innerHTML = efetuando_compra_produto_format;

    // impressão do valor do frete..
    let pagamento_do_frete = document.getElementById('pagamento_do_frete');
    let pagamento_do_frete_format = ValorFrete.toFixed(2);
    pagamento_do_frete.innerHTML = pagamento_do_frete_format;

    // impressão da margem...
    let Result_margem_valor = preco_de_venda - percentual - ValorProduto - ValorFrete;
    let Result_margem_valor_format = Result_margem_valor.toFixed(2);

    let Result_margem = document.getElementById('result_margem_final');
    Result_margem.innerHTML = Result_margem_valor_format;













}

function Projetar() {



    let custoFixo = document.getElementById('input_custo_fixo').value;
    let margemLiquida = document.getElementById('input_margem').value;
    let quantidade = document.getElementById('input_quantidade').value;

    let margemQuantidade = margemLiquida * quantidade;

    let Result = margemQuantidade - custoFixo;
    let Format_result = Result.toFixed(2);
    let painel = document.getElementById('result');

    painel.innerHTML = Format_result;
}