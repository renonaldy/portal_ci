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
        <a href="administrator/home" class="logo">
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
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <span class='uppercase'><?php echo $this->session->level; ?></span></li>
						<li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>

						<li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Data Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
							<li><a href="<?php echo base_url(); ?>siswa"><i class="fa fa-dashboard"></i> <span>Tampil Data Siswa</span></a></li>
							<li><a href="<?php echo base_url(); ?>siswa/add_new"><i class="fa fa-dashboard"></i> <span>Tambah Data Siswa</span></a></li>
							</ul>
							</li>

            <li class="treeview">
              <a href="administrator/home"><i class="glyphicon glyphicon-pencil"></i> <span>Modul Berita</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <?php
                $cek=$this->model_app->umenu_akses("listberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url()."administrator/listberita'><i class='fa fa-circle-o'></i> Berita</a></li>";
                }

                $cek=$this->model_app->umenu_akses("kategoriberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url()."administrator/kategoriberita'><i class='fa fa-circle-o'></i> Kategori Berita</a></li>";
                }

                $cek=$this->model_app->umenu_akses("tagberita",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url()."administrator/tagberita'><i class='fa fa-circle-o'></i> Tag Berita</a></li>";
                }

                $cek=$this->model_app->umenu_akses("album",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url()."administrator/album'><i class='fa fa-circle-o'></i> Berita Foto</a></li>";
                }

                $cek=$this->model_app->umenu_akses("gallery",$this->session->id_session);
                if($cek==1 OR $this->session->level=='admin'){
                  echo "<li><a href='".base_url()."administrator/gallery'><i class='fa fa-circle-o'></i> Gallery Berita Foto</a></li>";
                }
              ?>
              </ul>
            </li>
            
            <li><a href="<?php echo base_url(); ?>administrator/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-edit"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>
      </aside>

      <div class="content-wrapper">
 
    <!-- Main content -->
    <section class="content">
		<div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <b><h3 class="box-title">Data Siswa yang Mengikuti Perlombaan</h3></b>
                  <a class='pull-right btn btn-success btn-sm' href='<?php echo base_url(); ?>siswa/add_new'>Tambahkan Data</a>
                </div><!-- /.box-header -->
        </div>
				<br />
        <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action bg-light">
            <thead class="bg-primary">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">NIS</th>
						<th scope="col">Jenis Kelamin</th>
						<th scope="col">Tanggal_lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Alasan</th>
            <th scope="col">Hobi</th>
            <th scope="col">Agama</th>
            <th scope="col">Tindakan</th>
						
            </tr>
            </thead>
            <?php
            $count = 0;
            foreach ($anggota->result() as $row) :
            $count++;
            ?>
            <tr>
            <th scope="row"><?php echo
            $count;?></th>
            <td><?php echo $row->Nama;?></td>
            <td><?php echo $row->Password;?></td>
						<td><?php echo $row->Kelas;?></td>
						            <td><?php echo $row->Tanggal_lahir;?></td>
            <td><?php echo $row->Email;?></td>
            <td><?php echo $row->Alasan;?></td>
            <td><?php echo $row->Hobi;?></td>
            <td><?php echo $row->Agama;?></td>
            <td>
						<a href="<?php echo site_url('siswa/delete/'.$row->user_id);?>" onclick ="return confirm('Apakah yakin ingin menghapus ?')" class="btn btn-sm btn-danger">Delete</a>
            <a href="<?php echo site_url('siswa/get_edit/'.$row->user_id);?>" class="btn btn-sm btn-info">Update</a>
						</td>
            </tr>
            <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
