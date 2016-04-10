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
                                            <b>INCLUSÃO REALIZADA COM SUCESSO</b>
                                        </h1>
                                    </div>
                                    <a href="incluir.php?tipo={$tipo}" class="btn btn-default">Inserir outro</a>
                                    <a href="home.php" class="btn btn-default">Retornar ao Menu Principal</a>
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
