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
                                            <b>{$title}</b>
                                        </h1>
                                    </div>
                                    <br>
                                    <form role="form" action="gera_email.php?data={$data}" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="hidden" name="data" value={$data}>
                                                <label for="email">Seu e-mail: </label>
                                                <input class="form-control col-lg-12" type="text" name="email" size="30">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="message">Descrição</label>
                                                <input type="text" id="message" name="message"  class="form-control col-lg-12">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input type="submit" id="enviar" name="enviar" value="ENVIAR" class="form-control col-lg-12">
                                            </div>
                                        </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 type="text" id="errorText" name="errorText" class="text-danger">{$textError|default:''} </h2>
                                        </div>
                                    </div>
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
        <script type="text/javascript" src="./js/utils.js"></script>
        {include file="comom/footer.tpl"}
    </body>
</html>
