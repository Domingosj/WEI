<header class="main-header">
  <!-- Logo -->
  <a href="dashboard.php" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>D</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Bantwana</b> DataServ </span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="dist/img/default-50x50.gif" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php print($userRow['user_name']); ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/default-50x50.gif" class="img-circle" alt="User Image">

              <p>
                <?php print($userRow['user_name']); ?> - <?php print($userRow['area_actuacao']); ?> / <?php print($userRow['ocb']); ?>
                <small> Membro desde .
                <?php
                setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                date_default_timezone_set('America/Sao_Paulo');
                echo strftime('%A, %d de %B de %Y', strtotime($userRow['joining_date']));?> </small>

              </p>

            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="userProfile.php??edit_id=<?php print($userRow['user_id']); ?>" class="btn btn-default btn-flat">Perfil</a>
              </div>
              <div class="pull-right">
                <a href="logout.php?logout=true" class="btn btn-default btn-flat">Sair</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>
