<script type="text/javascript">
    function validasi_input(form){

        if (form.nama.value == ""){
            alert("Username masih kosong!");
            form.nama.focus();
            return (false);
        }

        if (form.ttl.value == ""){
            alert("tempat lahir masih kosong!");
            form.ttl.focus();
            return (false);
        }

        if (form.no_tlp.value == ""){
            alert("no telepon masih kosong!");
            form.no_tlp.focus();
            return (false);
        }

        if (form.tgl.value == ""){
            alert("tanggal masih kosong!");
            form.tgl.focus();
            return (false);
        }

        if (form.pend_terakhir.value == ""){
            alert("pendidikan terakhir masih kosong!");
            form.pend_terakhir.focus();
            return (false);
        }

        var mincar = 8;

        var  harga = document.getElementById("no_tlp");

        var validasiAngka = /^[0-9]+$/;

        if(harga.value.match(validasiAngka)){
        }else{
            alert ("maaf, nomor telepon harus dalam bentuk angka.");
            return false;
        }

        if (form.nama.value.length < mincar){
            alert("Panjang nama Minimal 8 Karater!");
            form.nama.focus();
            return (false);
        }

        pola_email=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!pola_email.test(form.email.value)){
            alert ('Penulisan Email tidak benar');
            form.email.focus();
            return false;
        }


        return (true);
    }
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatibl" content="IE=edge">
    <title>Gema Insani Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url()?>Teller/tampilhalamandepan_teller" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>GEMA </b>INSANI</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="navbar-custom-menu">
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <!-- search form -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header" style="color:white;">MAIN NAVIGATION</li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>Pegawai</span>
                        <span class="pull-right-container">
                                 <i class="fa fa-angle-left pull-right"></i>
                                 </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url()?>pegawai/inputKaryawan"><i class="glyphicon glyphicon-record"></i> + Data Pegawai </a></li>
                        <li><a href="<?php echo base_url()?>pegawai/dataPegawai"><i class="glyphicon glyphicon-record"></i> Lihat Data Pegawai </a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url()?>login/logout">
                        <i class="glyphicon glyphicon-log-out"></i>
                        Sign Out
            <span class="pull-right-container">
            </span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-body">
                    <div class="box-header with-border">
                        <center><h3 class="box-title">Tambah Data Pegawai</h3></center>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="box-body">
                        <center>
                            Gema Insani
                        </center>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <center>

                        </center>
                    </div>
                </div>
                <div class="box">
                </div>
                <div class="box">
                    <form class="form-horizontal" action="<?php echo base_url()?>pegawai/tambahKaryawan" method="post" onsubmit="return validasi_input(this);">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="hidden" class="form-control" id="inputEmail3"
                                           name="isi" placeholder="isi" required="true">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Nama Lengkap</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="nama"
                                           name="nama" placeholder="Nama lengkap" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tempat lahir</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control"
                                           name="ttl" placeholder="Tempat lahir" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal lahir</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="inputEmail3"
                                           name="tgl" min="1993-12-30" max="<?= date('Y-m-d') ;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputEmail3"
                                           name="email" placeholder="isi" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">No Telp</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="no_tlp"
                                           name="no_tlp" placeholder="No telepon" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Pendidikan Terakhir</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputEmail3"
                                           name="pend_terakhir" placeholder="pendidikan terakhir" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Jenis kelamin</label>
                                <label class="radio-inline" style="margin-left:20px;">
                                    <input type="radio" name="jk" id="status" value="Pria" checked>Laki-laki
                                </label>
                                <label class="radio-inline" style="margin-left:20px;">
                                    <input type="radio" name="jk" id="status" value="Wanita">Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Status Nikah</label>
                                <label class="radio-inline" style="margin-left:20px;">
                                    <input type="radio" name="status_nikah" id="status" value="Lajang" checked>Lajang
                                </label>
                                <label class="radio-inline" style="margin-left:20px;">
                                    <input type="radio" name="status_nikah" id="status" value="Menikah">Menikah
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Jumlah tanggungan</label>
                                <div class="col-sm-6">
                                    <select id="rencana_pembayaran_per" name="jml_tanggungan" class="form-control">
                                        <option value="krg15">kurang dari 15 menit</option>
                                        <option value="krg30">kurang dari 30 menit</option>
                                        <option value="gg">Gangguan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <input type="reset" class="btn btn-danger" value="Reset" style="margin-left: 1100px;">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<script src="<?php echo base_url()?>assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>
</body>
</html>
