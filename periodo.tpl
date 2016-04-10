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
                                <div class="panel-body ">
                                    <div class="row col-lg-12">
                                        <h1 class="panel-title text-center">
                                            <b>{$subtitle}</b>
                                        </h1>
                                    </div>

                                    <div class="row">
                                    </div>

                                    <form role="form" action="spreadsheet.php" method="POST" enctype="multipart/form-data" onsubmit="return validaForm();">
                                        <div class="row">             
                                            <hr>
                                            <div class="col-lg-6">
                                                <label for="month_start">Mes: </label>
                                                <select name="month_start" id="month_start" class="form-control btn btn-default col-lg-6">
                                                    <option value="0">SELECIONAR</option>
                                                    {html_options values=$monthValue output=$month}
                                                </select>  
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="year_start">Ano: </label>
                                                <input type="text" id="year_start" name="year_start" class="form-control" value="{$smarty.now|date_format:"%Y"}">
                                            </div>
                                        </div>

                                        <div class="row col-lg-12">
                                            <h1 class="panel-title text-center">
                                                <hr>
                                                <b>Até</b>
                                                <hr>
                                            </h1>
                                        </div>

                                        <div class="row">             
                                            <div class="col-lg-6">
                                                <label for="month_final">Mes: </label>
                                                <select name="month_final" id="month_final" class="form-control btn btn-default col-lg-6">
                                                    <option value="0">SELECIONAR</option>
                                                    {html_options values=$monthValue output=$month}
                                                </select>  
                                            </div>

                                            <div class="col-lg-6">
                                                <label for="year_final">Ano: </label>
                                                <input type="text" id="year_final" name="year_final" class="form-control" value="{$smarty.now|date_format:"%Y"}">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button type="submit" value="send" id="send" class="btn btn-default col-lg-12" >ENVIAR</button>
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
        <script type="text/javascript" src="./js/period.js"></script>
        <script type="text/javascript" src="./js/utils.js"></script>
        {include file="comom/footer.tpl"}
    </body>
</html>
