<?php
/* Smarty version 3.1.29, created on 2016-04-06 20:27:49
  from "/var/www/htdocs/financial_control_php/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57059b7512d379_58203261',
  'file_dependency' => 
  array (
    'ce7918827616093a0b3da5e0a3dbf0002728b5ce' => 
    array (
      0 => '/var/www/htdocs/financial_control_php/home.tpl',
      1 => 1459985227,
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
function content_57059b7512d379_58203261 ($_smarty_tpl) {
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


                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Bordered Table</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Bordered with Striped Rows</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Basic Table</h2>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h2>Striped Rows</h2>
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Visits</th>
                                            <th>% New Visits</th>
                                            <th>Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>/index.html</td>
                                            <td>1265</td>
                                            <td>32.3%</td>
                                            <td>$321.33</td>
                                        </tr>
                                        <tr>
                                            <td>/about.html</td>
                                            <td>261</td>
                                            <td>33.3%</td>
                                            <td>$234.12</td>
                                        </tr>
                                        <tr>
                                            <td>/sales.html</td>
                                            <td>665</td>
                                            <td>21.3%</td>
                                            <td>$16.34</td>
                                        </tr>
                                        <tr>
                                            <td>/blog.html</td>
                                            <td>9516</td>
                                            <td>89.3%</td>
                                            <td>$1644.43</td>
                                        </tr>
                                        <tr>
                                            <td>/404.html</td>
                                            <td>23</td>
                                            <td>34.3%</td>
                                            <td>$23.52</td>
                                        </tr>
                                        <tr>
                                            <td>/services.html</td>
                                            <td>421</td>
                                            <td>60.3%</td>
                                            <td>$724.32</td>
                                        </tr>
                                        <tr>
                                            <td>/blog/post.html</td>
                                            <td>1233</td>
                                            <td>93.2%</td>
                                            <td>$126.34</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h2>Contextual Classes</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                    <div class="container-fluid">

                                        <!-- Page Heading -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h1 class="page-header">
                                                    Tables
                                                </h1>
                                                <ol class="breadcrumb">
                                                    <li>
                                                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                                    </li>
                                                    <li class="active">
                                                        <i class="fa fa-table"></i> Tables
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h2>Bordered Table</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Visits</th>
                                                                <th>% New Visits</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>/index.html</td>
                                                                <td>1265</td>
                                                                <td>32.3%</td>
                                                                <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/about.html</td>
                                                                <td>261</td>
                                                                <td>33.3%</td>
                                                                <td>$234.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/sales.html</td>
                                                                <td>665</td>
                                                                <td>21.3%</td>
                                                                <td>$16.34</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog.html</td>
                                                                <td>9516</td>
                                                                <td>89.3%</td>
                                                                <td>$1644.43</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/404.html</td>
                                                                <td>23</td>
                                                                <td>34.3%</td>
                                                                <td>$23.52</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/services.html</td>
                                                                <td>421</td>
                                                                <td>60.3%</td>
                                                                <td>$724.32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog/post.html</td>
                                                                <td>1233</td>
                                                                <td>93.2%</td>
                                                                <td>$126.34</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h2>Bordered with Striped Rows</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Visits</th>
                                                                <th>% New Visits</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>/index.html</td>
                                                                <td>1265</td>
                                                                <td>32.3%</td>
                                                                <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/about.html</td>
                                                                <td>261</td>
                                                                <td>33.3%</td>
                                                                <td>$234.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/sales.html</td>
                                                                <td>665</td>
                                                                <td>21.3%</td>
                                                                <td>$16.34</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog.html</td>
                                                                <td>9516</td>
                                                                <td>89.3%</td>
                                                                <td>$1644.43</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/404.html</td>
                                                                <td>23</td>
                                                                <td>34.3%</td>
                                                                <td>$23.52</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/services.html</td>
                                                                <td>421</td>
                                                                <td>60.3%</td>
                                                                <td>$724.32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog/post.html</td>
                                                                <td>1233</td>
                                                                <td>93.2%</td>
                                                                <td>$126.34</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h2>Basic Table</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Visits</th>
                                                                <th>% New Visits</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>/index.html</td>
                                                                <td>1265</td>
                                                                <td>32.3%</td>
                                                                <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/about.html</td>
                                                                <td>261</td>
                                                                <td>33.3%</td>
                                                                <td>$234.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/sales.html</td>
                                                                <td>665</td>
                                                                <td>21.3%</td>
                                                                <td>$16.34</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog.html</td>
                                                                <td>9516</td>
                                                                <td>89.3%</td>
                                                                <td>$1644.43</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/404.html</td>
                                                                <td>23</td>
                                                                <td>34.3%</td>
                                                                <td>$23.52</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/services.html</td>
                                                                <td>421</td>
                                                                <td>60.3%</td>
                                                                <td>$724.32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog/post.html</td>
                                                                <td>1233</td>
                                                                <td>93.2%</td>
                                                                <td>$126.34</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h2>Striped Rows</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Visits</th>
                                                                <th>% New Visits</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>/index.html</td>
                                                                <td>1265</td>
                                                                <td>32.3%</td>
                                                                <td>$321.33</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/about.html</td>
                                                                <td>261</td>
                                                                <td>33.3%</td>
                                                                <td>$234.12</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/sales.html</td>
                                                                <td>665</td>
                                                                <td>21.3%</td>
                                                                <td>$16.34</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog.html</td>
                                                                <td>9516</td>
                                                                <td>89.3%</td>
                                                                <td>$1644.43</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/404.html</td>
                                                                <td>23</td>
                                                                <td>34.3%</td>
                                                                <td>$23.52</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/services.html</td>
                                                                <td>421</td>
                                                                <td>60.3%</td>
                                                                <td>$724.32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog/post.html</td>
                                                                <td>1233</td>
                                                                <td>93.2%</td>
                                                                <td>$126.34</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h2>Contextual Classes</h2>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Page</th>
                                                                <th>Visits</th>
                                                                <th>% New Visits</th>
                                                                <th>Revenue</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="active">
                                                                <td>/index.html</td>
                                                                <td>1265</td>
                                                                <td>32.3%</td>
                                                                <td>$321.33</td>
                                                            </tr>
                                                            <tr class="success">
                                                                <td>/about.html</td>
                                                                <td>261</td>
                                                                <td>33.3%</td>
                                                                <td>$234.12</td>
                                                            </tr>
                                                            <tr class="warning">
                                                                <td>/sales.html</td>
                                                                <td>665</td>
                                                                <td>21.3%</td>
                                                                <td>$16.34</td>
                                                            </tr>
                                                            <tr class="danger">
                                                                <td>/blog.html</td>
                                                                <td>9516</td>
                                                                <td>89.3%</td>
                                                                <td>$1644.43</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/404.html</td>
                                                                <td>23</td>
                                                                <td>34.3%</td>
                                                                <td>$23.52</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/services.html</td>
                                                                <td>421</td>
                                                                <td>60.3%</td>
                                                                <td>$724.32</td>
                                                            </tr>
                                                            <tr>
                                                                <td>/blog/post.html</td>
                                                                <td>1233</td>
                                                                <td>93.2%</td>
                                                                <td>$126.34</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <h2>Bootstrap Docs</h2>
                                                <p>For complete documentation, please visit <a target="_blank" href="http://getbootstrap.com/css/#tables">Bootstrap's Tables Documentation</a>.</p>
                                            </div>
                                        </div>
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
