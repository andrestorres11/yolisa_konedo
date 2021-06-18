<nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#9A6046;" >
  <div class="container-fluid">
      <!-- Just an image -->
      <nav class="navbar navbar-Dark bg-Dark " >
        <div class="gb_bb">
            <a class="navbar-brand" href="index.php">
              <img src="images/logo_negro.jpeg" class="rounded-circle" alt="" width="60" height="60">
            </a>
        </div>
      </nav>
      <a class="navbar-brand"  href="index.php"><FONT COLOR= #EAD6B3><i>Yolisa Koneo</i></a></FONT>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
      <div class="container">
        <div class="row">
          <form class="form" >
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Buscar" aria-label="Search" style="padding-left: 20px; border-radius: 40px;" id="mysearch">
                <div class="input-group-addon" style="margin-left: -50px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
                  <button class="btn btn btn-sm" type="submit"  style= " border-radius: 20px; background-color:#EAD6B3" id="search-btn"><i class="fa fa-search"></i></button>
                </div>
            </div>
          </form>
        </div>
      </div>
      
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <?php
            if (empty($_SESSION)) {
        ?>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../login/login.php"><FONT COLOR=#EAD6B3>Iniciar Sesión</a></FONT>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../login/registrar.php"><FONT COLOR=#EAD6B3>Registrarse</a></FONT>
        </li>
        <?php
            }else {
              ?>
              
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Sopas</a></li>
                <li><a class="dropdown-item" href="#">Postres</a></li>
                <li><a class="dropdown-item" href="#">Almuerzos</a></li>
                <li><a class="dropdown-item" href="#">Bebidas</a></li>
                <li><a class="dropdown-item" href="#">Ensaladas</a></li>
                <li><a class="dropdown-item" href="#">Desayunos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="perfil.php" tabindex="-1" aria-disabled="true">Mi Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " tabindex="-1" aria-disabled="true" onclick="cerrarSession()">Cerrar Sesion</a>
            </li>
            </ul>
            <?php
            }
        ?>
        
      </div>
  </div>
</nav>