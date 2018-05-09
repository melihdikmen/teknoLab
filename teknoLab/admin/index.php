﻿<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Admin Yönetim Paneli</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">

	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hesabım <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profil</a></li>
							   <li><a href="newadmin.html">Yeni Admin Ekle</a></li>
	                          <li><a href="login.html">Çıkış</a></li>

	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Kullanıcılar</a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>Öğretim Görevlisi
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="ogr.html">Ekle</a></li>
                            <li><a href="duzenle.html">Düzenle</a></li>
                        </ul>

                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Ders ve Laboratuvarlar
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="dersvelabekle.html">Ders ve Laboratuvar Ekle</a></li>
							<li><a href="dersvelabduz.html">Ders ve Laboratuvar Düzenle</a></li>


                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">







  			<div class="row">


  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Yetkili Listesi</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						<table class="table" action="" method="POST">
			              <thead>
			                <tr>
			                  <th>#</th>
			                  <th>First Name</th>
			                  <th>Last Name</th>
			                  <th>Username</th>
			                </tr>
			              </thead>
			              <tbody>
                    <?php

                      include ("baglan.php");
                      $sql=mysqli_query($baglan,"select * from ogr ");
                      $sayac=1;
                      while($oku=mysqli_fetch_array($sql))
                      {
                        $ad=$oku["ad"];
                        $soyad=$oku["soyad"];
                        $username=$oku["username"];
                        echo "<tr>
                        <td>$sayac</td>
                        <td>$ad</td>
                        <td>$soyad</td>
                        <td>$username</td>
                      </tr>";
                      $sayac++;
                      }




                      ?>
			            </table>
  					</div>
  				</div>
  			</div>





		  </div>
		</div>
    </div>

    <footer>
         <div class="container">

            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>

         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/tables.js"></script>
  </body>
</html>
