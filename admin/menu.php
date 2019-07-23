<?php>
<nav class="navbar navbar-default top-navbar" role="navigation">
<div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
        <span class="sr-only">Navegación de palanca
        </span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <h2><a class="navbar-brand " href="admin.php">ADMIN</a></h2>
    
</div>
<div class=" navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="menu menu--iris">
            <ul class="nav navbar-nav menu__list">
                <li class="menu__item"><a href=<?php echo URL_PATH."uprincipal.php"?> class="menu__link scroll">Inicio</a></li>
               <li class="menu__item"><a href=<?php echo URL_PATH."uprincipal.php?controller=sesion&action=logout"?> class="menu__link scroll">Cerrar Sesion</a></li>
            </ul>
        </nav>
    </div>
</nav>
