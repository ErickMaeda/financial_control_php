<?php
/* Smarty version 3.1.29, created on 2016-04-06 20:27:56
  from "/var/www/htdocs/financial_control_php/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57059b7c39f7f3_02222586',
  'file_dependency' => 
  array (
    '858bc4438ba61737d9d3a7686c01764268951c6d' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/login.tpl',
      1 => 1459985263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comom/head.tpl' => 1,
    'file:comom/navbar_top.tpl' => 1,
    'file:comom/footer.tpl' => 1,
  ),
),false)) {
function content_57059b7c39f7f3_02222586 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>

        <div id="wrapper">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/navbar_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value['signin'])) {?>
                            <p style="color: red">
                                <b><?php echo $_smarty_tpl->tpl_vars['error']->value['signin'];?>
</b>
                            </p>
                        <?php }?>
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
                        <?php if (isset($_smarty_tpl->tpl_vars['error']->value['signup'])) {?>
                            <p style="color: red">
                                <b><?php echo $_smarty_tpl->tpl_vars['error']->value['signup'];?>
</b>
                            </p>
                        <?php }?>
                    </form>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comom/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>

</html>
<?php }
}
