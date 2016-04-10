<!DOCTYPE html>
<html lang="en">

    {include file="comom/head.tpl"}
    <body>

        <div id="wrapper">
            {include file ="comom/navbar_top.tpl"}
            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <!-- /.row -->
                    <form role="form" action="login.php" method="POST">
                        <input 
                            type="hidden" 
                            name="action" id="action" 
                            maxlength="50" 
                            value="signin">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="novo_parceiro_setor">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">
                                            Entre
                                        </h1>
                                    </div>
                                </div>
                                <div class="panel panel-default">    
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="email_usuario">EMAIL</label>
                                                    <input 
                                                        data-label="EMAIL" 
                                                        type="text" 
                                                        class="form-control obg standard-mask-email standard-form-require standard-form-email" 
                                                        name="email_usuario" id="email_usuario" 
                                                        maxlength="50" 
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="senha_usuario">SENHA</label>
                                                    <input 
                                                        data-label="SENHA" 
                                                        type="password" 
                                                        class="form-control obg standard-form-require standard-form-min-3" 
                                                        name="senha_usuario" id="senha_usuario" 
                                                        maxlength="50">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <input 
                                                        data-label="ENTRAR" 
                                                        type="submit" 
                                                        class="btn btn-default col-sm-12" 
                                                        value="ENTRAR"
                                                        name="entrar" id="entrar" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {if isset ($error.signin)}
                            <p style="color: red">
                                <b>{$error.signin}</b>
                            </p>
                        {/if}
                    </form>

                    <form role="form" action="login.php" method="POST">
                        <input 
                            type="hidden" 
                            name="action" id="action" 
                            maxlength="50" 
                            value="signup">
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="novo_parceiro_setor">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header">
                                            Cadastre-se
                                        </h1>
                                    </div>
                                </div>
                                <div class="panel panel-default">    
                                    <div class="panel-body">
                                        <div class="hidden">
                                            <input type="hidden" class="form-control hidden" name="id_usuario" id="id_usuario" value="0">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="nome_usuario">NOME</label>
                                                    <input 
                                                        data-label="NOME" 
                                                        type="text" 
                                                        class="form-control obg standard-mask-string standard-form-require standard-form-min-3" 
                                                        name="nome_usuario"
                                                        id="nome_usuario" 
                                                        maxlength="50" 
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="sobrenome_usuario">SOBRENOME</label>
                                                    <input 
                                                        data-label="SOBRENOME" 
                                                        type="text" 
                                                        class="form-control obg standard-mask-string standard-form-require standard-form-min-3" 
                                                        name="sobrenome_usuario"
                                                        id="sobrenome_usuario" 
                                                        maxlength="50" 
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="senha_usuario">SENHA</label>
                                                    <input 
                                                        data-label="SENHA" 
                                                        type="password" 
                                                        class="form-control obg standard-form-require standard-form-min-3" 
                                                        name="senha_usuario" id="senha_usuario" 
                                                        maxlength="50">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group"> 
                                                    <label for="senha_usuario_confirmar">CONFIRMAR SENHA</label>
                                                    <input 
                                                        data-label="CONFIRMAR SENHA" 
                                                        type="password"
                                                        class="form-control obg standard-form-require" 
                                                        name="senha_usuario_confirmar" 
                                                        id="senha_usuario_confirmar" 
                                                        maxlength="50">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="email_usuario">EMAIL</label>
                                                    <input 
                                                        data-label="EMAIL" 
                                                        type="text" 
                                                        class="form-control obg standard-mask-email standard-form-require standard-form-email" 
                                                        name="email_usuario" id="email_usuario" 
                                                        maxlength="50" 
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> 
                                                    <label for="telefone">TELEFONE</label>
                                                    <input 
                                                        data-label="TELEFONE" 
                                                        type="text" 
                                                        class="form-control obg standard-mask-phone standard-form-require standard-form-phone" 
                                                        name="telefone" id="telefone" 
                                                        maxlength="15" 
                                                        value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group"> 
                                                    <input 
                                                        data-label="CADASTRE-SE" 
                                                        type="submit" 
                                                        class="btn btn-default col-sm-12" 
                                                        value="CADASTRE-SE"
                                                        name="gravar_usuario" id="gravar_usuario" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        {if isset ($error.signup)}
                            <p style="color: red">
                                <b>{$error.signup}</b>
                            </p>
                        {/if}
                    </form>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        {include file="comom/footer.tpl"}
    </body>

</html>
