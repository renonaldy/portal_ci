<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portal Berita Akademik</title>
    <meta name="author" content="renonaldy">
    <link rel="shortcut icon" href="http://localhost/portal/asset/images/bung1.png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="http://localhost/portal//asset/admin/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/portal/asset/admin/plugins/daterangepicker/daterangepicker-bs3.css">
    <style type="text/css"> .files{ position:absolute; z-index:2; top:0; left:0; filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; opacity:0; background-color:transparent; color:transparent; } </style>
    <script type="text/javascript" src="http://localhost/portal//asset/admin/plugins/jQuery/jquery-1.12.3.min.js"></script>
    <script src="http://localhost/portal/asset/ckeditor/ckeditor.js"></script>
    <style type="text/css">.checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }</style>
      <link rel="stylesheet" href="https://almsaeedstudio.com/themes/AdminLTE/plugins/pace/pace.min.css">
    <script type="text/javascript">
    function nospaces(t){
        if(t.value.match(/\s/g)){
            alert('Maaf, Tidak Boleh Menggunakan Spasi,..');
            t.value=t.value.replace(/\s/g,'');
        }
    }
    </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
          <style type="text/css">
  .sekolah{
    float: left;
    background-color: transparent;
    background-image: none;
    padding: 15px 15px;
    font-family: fontAwesome;
    color:#fff;
  }
  .sekolah:hover{
    color:#fff;
  }
</style>
        <!-- Logo -->
        <a href="home" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="fa fa-mortar-board"><b>Selamat Datang</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
						
					</a>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="main-sidebar">
                  <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
                        <img src="http://localhost/portal/asset/foto_user/WhatsApp_Image_2020-06-12_at_21_37_44.png" class="img" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Renonaldy</p>              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'>admin</span></li>
						<li><a href="http://localhost/portal/administrator/home"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

						<li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Data Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
							<li><a href="http://localhost/portal/siswa"><i class="fa fa-dashboard"></i> <span>Tampil Data</span></a></li>
							</ul>
							</li>

            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Berita</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href='http://localhost/portal/administrator/listberita'><i class='fa fa-circle-o'></i> Berita</a></li><li><a href='http://localhost/portal/administrator/kategoriberita'><i class='fa fa-circle-o'></i> Kategori Berita</a></li><li><a href='http://localhost/portal/administrator/tagberita'><i class='fa fa-circle-o'></i> Tag Berita</a></li><li><a href='http://localhost/portal/administrator/album'><i class='fa fa-circle-o'></i> Berita Foto</a></li><li><a href='http://localhost/portal/administrator/gallery'><i class='fa fa-circle-o'></i> Gallery Berita Foto</a></li>              </ul>
            </li>
            
            <li><a href="http://localhost/portal/administrator/edit_manajemenuser/reno"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
            <li><a href="http://localhost/portal/administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">



 
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Data Siswa</h3>

        
        </div>
        <div class="card-body p-0">
        <div class="card-header">
        <form action="<?php echo site_url('siswa/update');?>" method="post">
            <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $Nama;?>" placeholder="Nama">
            </div>
            <div class="form-group">
            <label>NIS</label>
            <input type="text" class="form-control"name="Password" value="<?php echo $Password;?>" placeholder="NPM">
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="Email" class="form-control" name="Email" value="<?php echo $Email;?>" placeholder="Email">
            </div>
            <div class="form-group">
            <label for="kelas">Jenis Kelamin</label>
						<br />
            <input type="radio" class="formcontrol" name="Kelas" value="Laki-Laki" id="pria" checked /> <label for="Pria">Pria</label>
            <input type="radio" class="formcontrol" name="Kelas" value="Perempuan" id="perempuan" checked /> <label for="Perempuan">Perempuan</label>
            </div>
            <div class="form-group">
            <label>Tanggal_lahir</label>
            <input type="date" class="form-control" name="Tanggal_lahir" min="2000-01-02" max="2020-12-31" value="<?php echo $Tanggal_lahir;?>">
            </div>
            <div class="form-group">
            <label>Alasan</label>
            <input type="textarea" class="form-control" name="Alasan" value="<?php echo $Alasan;?>" placeholder="Alasan">
            </div>
            <div class="form-group">
            <label>Hobi</label>
            <input type="checkbox" class="formcontrol" name="Hobi"  value="Belajar" <?php echo $Hobi;?>>Belajar 
            <input type="checkbox" class="formcontrol" name="Hobi" value="Membaca"<?php echo $Hobi;?>>Membaca
						<input type="checkbox" class="formcontrol" name="Hobi" value="Menulis" <?php echo $Hobi;?>>Menulis
						<input type="checkbox" class="formcontrol" name="Hobi" value="Desain" <?php echo $Hobi;?>>Desain
						<input type="checkbox" class="formcontrol" name="Hobi" value="Web" <?php echo $Hobi;?>>Web

            </div>
            <div class="form-group">
            <label>Agama</label>
            <select name="Agama" class="form-control" required>
            <option value="Islam" <?php echo ($Agama=='Islam'?'selected':'');?>>Islam</option>
            <option value="Kristen" <?php echo ($Agama=='Kristen'?'selected':'');?>>Kristen</option>
            <option value="Hindu" <?php echo ($Agama=='Hindu'?'selected':'');?>>Hindu</option>
            <option value="Buddha" <?php echo ($Agama=='Buddha'?'selected':'');?>>Buddha</option>
            <option value="Katolik" <?php echo ($Agama=='Katolik'?'selected':'');?>>Katolik</option>
						<option value="Konghucu" <?php echo ($Agama=='Konghucu'?'selected':'');?>>Konghucu</option>
						
            </select>
            </div>
            <input type="hidden" name="user_id" value="<?php echo $user_id?>">
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
