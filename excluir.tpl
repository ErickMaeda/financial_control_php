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
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>CODIGO</th>
                                                <th>Descrição</th>
                                                <th>Tipo</th>
                                                <th>Data de Cadastro</th>
                                                <th>Custo</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {foreach from=$movimentacoes item="linha"}
                                                <tr>                                                                
                                                    <td>{$linha->id_movimentacao}</td>
                                                    <td>{$linha->des_movimentacao}</td>
                                                    <th>{$linha->movimentacao_tipo}</th>
                                                    <th>{$linha->dt_movimentacao|date_format:"%d/%m/%Y"}</th>
                                                    <th>{$linha->custo} R$</th>
                                                    <th>                   
                                                        <a href="excluir.php?id_movimentacao={$linha->id_movimentacao}">Deletar</a>
                                                    </th>
                                                </tr>
                                            {foreachelse}
                                                <tr><td colspan="100%">Tabela Vazia</td></tr>
                                            {/foreach}          
                                        </tbody>
                                    </table>   
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- /#page-wrapper -->
                </div>
            </div>
        </div>
        <script src="js/jquery-2.2.1.js" type="text/javascript"></script>
        <script type="text/javascript" src="./js/utils.js"></script>
        {include file="comom/footer.tpl"}
    </body>
</html>


