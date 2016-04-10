<ul class="nav navbar-right top-nav">       
    {if isset($smarty.session.usuario)}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$smarty.session.usuario.email} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>      
        </li>
    {/if}
</ul>