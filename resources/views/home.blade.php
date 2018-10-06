<!DOCTYPE html>
<html>
@include('part.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <span class="logo-lg"><b>E-</b>Certificate</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
            </ul>
          </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="/">
              <i class="fa fa-pencil"></i> <span>Input Data</span>
            </a>
          </li>
        </li>
        <li>
            <a href="/">
              <i class="fa fa-book"></i> <span>Daftar Sertifikat</span>
            </a>
          </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header" style="text-align:center">
      <h1>
        INPUT DATA
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                {{-- <div class="box-header with-border">
                  <h3 class="box-title">Form</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form" action="/submit" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- text input -->
                        <div class="form-group">
                            <label>Judul Sertifikat</label>
                            <input name="judul" type="text" class="form-control" placeholder="Judul Sertifikat" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori_id" required>
                                <option disabled selected value> -- select an option -- </option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Lokasi</label>
                            <input name="lokasi" type="text" class="form-control" placeholder="Misal : Bogor - Indonesia" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Mulai</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="tanggal_mulai" type="text" class="form-control pull-right" id="tanggalMulai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Selesai</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input name="tanggal_selesai" type="text" class="form-control pull-right" id="tanggalSelesai" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Data</label>
                            <input name="excel_data" type="file" id="exampleInputFile" required>
                            <p class="help-block">Masukan file excel berisi daftar penandatangan dan peserta</p>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputFile">Data Peserta</label>
                            <input name="excel_peserta" type="file" id="exampleInputFile" required>
                            <p class="help-block">Masukan file excel berisi daftar peserta</p>
                        </div> --}}
                        <button type="submit" class="btn btn-block btn-primary btn-flat">Submit</button>
                    </form>
                </div>
                <!-- /.box-body -->
              </div>
          </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 <a href="https://codepanda.web.id">Codepanda</a>.</strong> 
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

@include('part.script')
</body>
</html>
