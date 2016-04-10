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
                                        Controle de Gastos Mensais
                                    </h1>
                                </div>
                            </div>
                            <div class="panel panel-default">    
                                <div class="panel-body ">
                                    <div class="row col-lg-12">
                                        <h1 class="panel-title text-center">
                                            <b>INCLUSÃO DE {$title}</b>
                                        </h1>
                                    </div>
                                    <br>
                                    <div class="row col-lg-12">
                                        <h3>Descricao: </h3>
                                    </div>
                                    <br>
                                    <form role="form" action="gravar.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data" onsubmit="return validaForm();">
                                        <input type="hidden" name="tipo" value="{$tipo}">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="radio" id="radio" name="radio" value="Nova" class="radio-inline" checked="true"> <label for="descricao">Nova</label>
                                                <input type="text" id="descricao" name="descricao" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="radio" id="radio" name="radio" value="Existente" class="radio-inline "> <label for="descricao_existente" >Existente</label>
                                                <select name="descricao" id="descricao_existente" class="form-control btn btn-default col-lg-6" disabled="true">
                                                    <option value="0">SELECIONAR</option>
                                                    {html_options values=$des_movimentacao output=$des_movimentacao}
                                                </select>  
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="mes">Mes: </label>
                                                    <select name="mes" id="mes" class="form-control btn btn-default col-lg-3">
                                                        {html_options options=$mes}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="ano">Ano: </label>
                                                    <input type="text" id="ano" name="ano" maxlength="4" class="form-control col-lg-3">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="valor">Valor: </label>
                                                    <input type="number" id="valor" name="valor" class="form-control col-lg-3">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" value="salvar" id="salvar" class="btn btn-default col-lg-12" >SALVAR</button>
                                            </div>
                                        </div>
                                    </form>
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
