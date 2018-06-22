<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/boxed-bg.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>
        <?php
        $nome = strtok($userRow['user_name'],' ');
        print($nome);?>
      </p>
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <!-- search form -->

    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="header">MENU</li>
      <li class="active">
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>

      </li>

      <li>
        <a href="forms.php">
          <i class="fa fa-pencil"></i> <span>Formularios</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <li>
        <a href="tables.php">
          <i class="fa fa-table"></i> <span>Atualizacoes</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <li>
        <a href="validacoes.php">
          <i class="fa fa-check-square"></i> <span>Validacoes</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>
      <li>
        <a href="relatorios.php">
          <i class="fa fa-file-text-o"></i> <span>Relatorios</span>
          <span class="pull-right-container">

          </span>
        </a>
      </li>

      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Admin de usuarios</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="register.php"><i class="fa fa-circle-o"></i> Registo de usuarios</a></li>
          <li><a href="userTable.php"><i class="fa fa-circle-o"></i>Tabelas de usuarios</a></li>
        </ul>
      </li>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
