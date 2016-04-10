{if isset($smarty.session.usuario)}
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="periodo.php"><i class="fa fa-fw fa-table"></i> Planilha de Gastos Mensais</a>
            </li>
            <li>
                <a href="excluir.php"> <i class="fa fa-fw fa-remove"></i> Excluir Receitas e Despesas</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#incluir"><i class="fa fa-fw fa-plus"></i> Incluir <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="incluir" class="collapse">
                    <li>
                        <a href="incluir.php?tipo=RF"> Receita Fixa</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=RV"> Receita Variável</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=DF"> Despesa Fixa</a>
                    </li>
                    <li>
                        <a href="incluir.php?tipo=DV"> Despesa Variável</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
{else}
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="login.php"><i class="fa fa-fw fa-dashboard"></i> Login</a>
            </li>
        </ul>
    </div>
{/if}