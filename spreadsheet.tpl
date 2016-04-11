<!DOCTYPE html>
<html lang="en">

    {include file="comom/head.tpl"}

    <body>
        <div id="wrapper">
            {include file ="comom/navbar_top.tpl"}
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane fade active in">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header">
                                        {$title}
                                    </h1>
                                </div>
                            </div>
                            <div class="panel panel-default">    
                                <div class="panel-body " >
                                    <div class="row col-lg-12">
                                        <h2>Receitas</h2>
                                    </div>
                                    <table class="table table-striped col-lg-12">
                                        <thead>
                                            <tr>
                                                <th>Descricao</th>
                                                <th>Tipo</th>
                                                    {foreach from=$colluns_receita item="collum"}
                                                    <th>{$collum|date_format:"%d/%m/%Y"}</th>
                                                    {/foreach}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach from=$receitas item="linha"}
                                                <tr>    
                                                    <td>{$linha->des_movimentacao}</td>
                                                    <td>{$linha->movimentacao_tipo}</td>
                                                    {foreach from=$colluns_receita item="collum"}
                                                        <td>
                                                            {if ($linha->dt_movimentacao==$collum)}
                                                                {$linha->custo}
                                                            {else}
                                                                -----
                                                            {/if}
                                                        </td>
                                                    {/foreach}
                                                </tr>

                                            {foreachelse}
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            {/foreach}  
                                            {if ($receitas)}
                                                <tr>    
                                                    <td>Total por data: </td>
                                                    <td>------</td>
                                                    {foreach from=$receitasByDate item="collum"}
                                                        <td>
                                                            {$collum|default:0}
                                                        </td>
                                                    {/foreach}
                                                </tr>
                                                <tr><td colspan="100%">Total de receitas: <b>{$receitas_total|default:0}</b></td></tr>                                                
                                            {/if}
                                        </tbody>
                                    </table>  
                                </div>
                            </div>

                            <div class="panel panel-default">    
                                <div class="panel-body " >
                                    <div class="row col-lg-12">
                                        <h2>Despesas</h2>
                                    </div>
                                    <table class="table table-striped col-lg-12">
                                        <thead>
                                            <tr>
                                                <th>Descricao</th>
                                                <th>Tipo</th>
                                                    {foreach from=$colluns_despesa item="collum"}
                                                    <th>{$collum|date_format:"%d/%m/%Y"}</th>
                                                    {/foreach}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach from=$despesas item="linha"}
                                                <tr>    
                                                    <td>{$linha->des_movimentacao}</td>
                                                    <td>{$linha->movimentacao_tipo}</td>
                                                    {foreach from=$colluns_despesa item="collum"}
                                                        <td>
                                                            {if ($linha->dt_movimentacao==$collum)}
                                                                {$linha->custo}
                                                            {else}
                                                                -----
                                                            {/if}
                                                        </td>
                                                    {/foreach}
                                                </tr>
                                            {foreachelse}
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            {/foreach}   
                                            {if ($despesas)}
                                                <tr>    
                                                    <td>Total por data: </td>
                                                    <td>------</td>
                                                    {foreach from=$despesasByDate item="collum"}
                                                        <td>
                                                            {$collum|default:0}
                                                        </td>
                                                    {/foreach}
                                                </tr>
                                                <tr><td colspan="100%">Total de receitas: <b>{$despesas_total|default:0}</b></td></tr>                                                
                                            {/if}
                                        </tbody>
                                    </table>  
                                </div>
                            </div>

                            {if ($colluns_despesa)}
                                <div class="panel panel-default">    
                                    <div class="panel-body " >
                                        <div class="row col-lg-12">
                                            <h2>EXPORTAR</h2>
                                        </div>
                                        <table class="table table-striped col-lg-12">
                                            <thead>
                                                <tr>
                                                    <td>EXPORTAR PARA: </td>
                                                    {foreach from=$colluns_despesa item="date"}
                                                        <td><b>{$date|date_format:"%d/%m/%Y"}</b></td>
                                                    {foreachelse}
                                                        <td colspan="100%">Tabela Vazia</td>
                                                    {/foreach}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>   
                                                    <td>GRAFICO: </td>
                                                    {foreach from=$colluns_despesa item="date"}
                                                        <td><a target = '_blank' href="grafico.php?data={$date}"><img src="storage/chart.png" style="width: 50px"></a></td>
                                                            {foreachelse}
                                                        <td colspan="100%">------</td>
                                                    {/foreach}
                                                </tr>
                                                <tr>    
                                                    <td>PDF</td>
                                                    {foreach from=$colluns_despesa item="date"}
                                                        <td><a target = '_blank' href="gera_pdf.php?data={$date}"><img src="storage/pdf.png" style="width: 50px"></a></td>
                                                            {foreachelse}
                                                        <td colspan="100%">------</td>
                                                    {/foreach}
                                                </tr>
                                                <tr>    
                                                    <td>E-MAIL</td>
                                                    {foreach from=$colluns_despesa item="date"}
                                                        <td><a target = '_blank' href="gera_email.php?data={$date}"><img src="storage/email.png" style="width: 50px"></a></td>
                                                            {foreachelse}
                                                        <td colspan="100%">------</td>
                                                    {/foreach}
                                                </tr>
                                                <tr>    
                                                    <td>SALDO TOTAL</td>
                                                    <td><h2><b>{$receitas_total - $despesas_total}</b></h2></td>
                                                </tr>
                                            </tbody>
                                        </table>  
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>

        <script src="js/jquery-2.2.1.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/incluir.js"></script>
        <script type="text/javascript" src="./js/utils.js"></script>
        {include file="comom/footer.tpl"}
    </body>
</html>










