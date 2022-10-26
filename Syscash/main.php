<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <title></title>
    </head>
    <body>
        <form>
            <h4 class="center_tx">Sistema SysCash v.1.0</h4>
            <fieldset class="caixa_grande">
                <div class="row">
                    <div class="col s8">
                        <div>Nome</div>
                        <input placeholder="Nome completo do cliente">
                    </div>
                    <div class="col s4">
                        <div>CPF</div>
                        <input placeholder="CPF válido do cliente">
                    </div>
                </div>

                <div class="row">
                    <div class="col s3">
                        <button class="btn-small" type="submit" name="btAdicionarProduto">Adicionar produto</button>
                    </div>
                    <div class="col s3">
                        <button class="btn-small" type="submit" name="btLimparCarrinho">Limpar carrinhho</button>
                    </div>
                    <div class="col s3">
                        <button class="btn-small" type="submit" name="btConcluirCompra">Concluir venda</button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descrição</th>
                            <th>Fabricante</th>
                            <th>Qtd</th>
                            <th>Val unit.</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0234</td>
                            <td>Teclado com fio, ABNT2 preto</td>
                            <td>Multilaser</td>
                            <td>1</td>
                            <td>99.00</td>
                            <td>99.00</td>
                            <td><a href="">Remover</a></td>
                        </tr>
                        <td colspan="7">Nenhum produto selecionado.</td>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col s6">
                        <h5>Total de itens: 01</h5>
                    </div>
                    <div class="col s6">
                        <h5>Total da compra: R$99.00</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <label>
                            <input type="radio" name="grupo">
                            <span>Cartão crédito</span>
                            <input type="radio" name="grupo">
                            <span>Dinheiro</span>
                        </label>
                    </div>
                </div>
            </fieldset>
        </form>
    </body>
</html>