<?php
  session_start();
  include('conexao.php');
?>

<!DOCTYPE html >
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <title>Clínica de estética MãosQueMODELAM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../css/homeStyle.css">

  <link rel="stylesheet" type="text/css" href="../../css/swiper.min.css">


  <!-- DateTimePicker -->
  <link href="../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../css/bootstrap-datetimepicker.min.css" rel="stylesheet">


  


  <style>
    .container{
      margin: 110px 250px 100px auto;
      padding: 30px;
      border: 1px solid #FBF5EF;
      border-radius: 10px;
      background-color: rgba(254,254,252,0.8);
      /*background-color: #F5F9FA;*/

      box-sizing: border-box;
      box-shadow: 0 15px 25px rgba(0,0,0,0.5);
    }
  
    .container label{
      padding-top: : 10px;
      color: #424242;
    }

    .cabecalho h2{
      padding: 0px;
      margin-bottom: 20px;
      color: #424242;
      
      font-size: 26pt;
      
    }

    .main-footer{
      padding: 30px;
    }

    body {
      background: #262626;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      background: #fff;
    }
    
    /* Efeitos de Blur*/
    .content-wrapper ul{
      margin: 0;
      padding: 0;
      display: flex;
     
    }

    .content-wrapper ul li{
      position: relative;
      list-style: none;
      width: 60px;
      height: 60px; 
      margin: 0 5px;
      border-radius: 50%;
      box-sizing: border-box;
    }

    .content-wrapper ul li:before,
    .content-wrapper ul li:after{
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #000;
      border-radius: 50%;
      filter: blur(15px);
      opacity: 0;
      transition: 1s;
      
    }

    .content-wrapper ul li:after{
      filter: blur(33px);
      z-index: -1;
    }

    .content-wrapper ul li:hover:before,
    .content-wrapper ul li:hover:after{
      opacity: 1; 
    }

    .content-wrapper ul li a{
      position: absolute;
      top: 10px;
      left: 10px;
      right: 10px;
      bottom: 10px;
      text-align: center;
      line-height: 43px;
      color: #fff;
      background: #000;
      font-size: 23px;
      border-radius: 50%;
    }

    .content-wrapper ul li a .fas{
      text-shadow: 0 2px 5px rgba(0,0,0,.2);
      transition: 0.5s;
      transform: rotateY(0deg) scale(0.7);
      opacity: 0.6;
    }

    .content-wrapper ul li a:hover .fas{
      opacity: 1;
      transform: scale(1);
    }

    .content-wrapper ul li:nth-child(1) a,
    .content-wrapper ul li:nth-child(1):before,
    .content-wrapper ul li:nth-child(1):after{
      background: linear-gradient(45deg, #ff0057, #e64a19)
    }

    .content-wrapper ul li:nth-child(2) a,
    .content-wrapper ul li:nth-child(2):before,
    .content-wrapper ul li:nth-child(2):after{
      background: linear-gradient(45deg, #89ff00, #00bcd4);
    }

    .content-wrapper ul li:nth-child(3) a,
    .content-wrapper ul li:nth-child(3):before,
    .content-wrapper ul li:nth-child(3):after{
      background: linear-gradient(45deg, #e91e63, #5d02ff);
    }

    .content-wrapper ul li:nth-child(4) a,
    .content-wrapper ul li:nth-child(4):before,
    .content-wrapper ul li:nth-child(4):after{
      background: linear-gradient(45deg, #ff0000, #ffc107);
    }

    /* Efeitos de Blur*/

    

  </style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-cyan navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="painel.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="testes.html" class="nav-link">Contatos</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Buscar" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <h5> <?php  echo $_SESSION['usuario']; ?> </h5>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Visualizar todas as Mensagens</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">vizualizar todas as Notificações</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="painel.php" class="brand-link">
      <img src="../../dist/img/logo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .7">
      <span class="brand-text font-weight-light">Corpo & Estética </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar slider">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Giovane Richard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Controles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="painel.php" class="nav-link active">
                  <i class="fas fa-chalkboard-teacher fa-2x" style="color: #F165A7 ;"></i>
                  <p>Painel Principal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../views/cadUsuario.php" class="nav-link">
                  <i class="fas fa-user-cog fa-2x"></i>
                  <p>Cadastrar Usuário</p>
                </a>
              </li>
              <li class="nav-item">
                <!--<a href="../views/cadCliente.html" class="nav-link">-->
                <a href="../views/cadCliente.php" class="nav-link">
                  <i class="far fa-address-card fa-2x"></i>
                  <p>Adicionar Cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <!--<a href="../views/cadCliente.html" class="nav-link">-->
                <a href="procedimentos.php" class="nav-link">
                 
                  <i class="fas fa-capsules fa-2x"></i>
                  <p> Adicionar Procedimento</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-header">FUNÇÕES</li>
          <li class="nav-item">
            <a href="uploadImagens.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Imagens Clientes
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Procedimento</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listar_clientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuários</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">FUNÇÕES</li>
          <li class="nav-item">
            <a href="calendario.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e_commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project_detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Clinica de Estética Mãos que Modelam</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="painel.php">Home</a></li>
              <li class="breadcrumb-item active">Tela Inicial v1</li>
            </ol>



            <!-- Teste de Gradientes -->
            <ul>
              <li><a href="painel.php"><i class="fas fa-home"></i></a></li>
              <li><a href="#"><i class="fas fa-gift"></a></i></li>
              <li><a href="#"><i class="fas fa-glass-martini"></a></i></li>
              <li><a href="../../index.php"><i class="fas fa-door-open"></i></a></li>
            </ul>

            <!-- Fim Teste de Gradientes  -->



          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    

    <!-- Início do códgo -->
    

       <div class="container">

    <!-- Horizontal Form -->
    <div class="cabecalho">
      <div class="card-header">
        <h2 class="card-title">Atendimento</h2>
      </div>
    </div>
      <!-- /.card-header -->

    <!-- Inicio do formulario -->
      <form method="post" action="cadastroAtendimento.php" onsubmit="return confirmacao()">
        <div class="form-row">

          <div class="form-group col-md-8">
            <label>Cliente</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-mortar-pestle" ></i></span>
              </div>
              <select name="nome_cliente" class="custom-select" required>
                <option >Selecione o Cliente</option>
                <?php
                    $query = "SELECT * FROM cliente";
                    $result = mysqli_query($conexao, $query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?>  
                      </option> <?php
                    }
                ?>
              </select>
            </div>
          </div>

        
        <div class="form-group col-md-4">
          <label for="inputPassword3" class="control-label">Data e Hora</label>
          <div class="form-group">
            <div class="input-group date data_formato" data-date-format="dd/mm/yyyy HH:ii:ss">
              <input type="text" class="form-control" name="data" placeholder="Data do Atendimento">
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
              </span>
            </div> 
          </div>
        </div>
             




          <div class="form-group col-md-8">
            <label>Tipo de Procedimento</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-mortar-pestle" ></i></span>
              </div>
              <select name="procedimento" class="custom-select" required>
                <option >Selecione o Procedimento</option>
                <?php
                    $query = "SELECT * FROM procedimento";
                    $result = mysqli_query($conexao, $query);
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option> <?php
                    }
                ?>
              </select>
            </div>
          </div>


          <div class="form-group col-md-4">
            <label>Atendimento atual</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-money-bill-alt"></i></span>
              </div>
              
              
              <select id="disabledSelect" name="nro_atendimento" class="custom-select" required>
                <option >Número do atendimento</option>
                <option >1º - Atendimento</option>
                <option >2º - Atendimento</option>
                <option >3º - Atendimento</option>
                <option >4º - Atendimento</option>
                <option >5º - Atendimento</option>
                <option >6º - Atendimento</option>
                <option >7º - Atendimento</option>
                <option >8º - Atendimento</option>
              </select>
            </div>
            </div>
          </div>


      <div class="form-group">
          <button class="btn btn-success btn-lg">Gerar Atendimento</button>
      </div>
    </div>
    </form>

  </div>

    
    <!-- Fim do códgo -->


            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">GRX-Software</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script src="../../dist/js/demo.js"></script>
<script src="../../dist/js/pages/dashboard3.js"></script>

<!-- DATETIMEPICKER -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src=../../js/bootstrap.min.js"></script>
  <script src="../../js/bootstrap-datetimepicker.min.js"></script>
  <script src="../../js/locales/bootstrap-datetimepicker.pt-BR.js"></script>



 <script type="text/javascript">

    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

  <script type="text/javascript">
     //DateTimePicker
    $('.data_formato').datetimepicker({
      weekStart: 1,
      todayBtn: 1,
          autoclose: 1,
          todayHighlight: 1,
          startView: 2,
          forceParse: 0,
          showMeridian: 1,
          language: "pt-BR",
          //startDate: '+0d'
    });
  </script>

</body>
</html>
