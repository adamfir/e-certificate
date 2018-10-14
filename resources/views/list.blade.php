<!DOCTYPE html>
<html>
@include('part.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
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
  @include('part.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    {{-- <section class="content-header" style="text-align:center">
      <h1>
        Daftar Sertifikat
      </h1>
    </section> --}}

    <!-- Main content -->
    <section class="content">
      @if ($message = Session::get('success'))
          <div class="callout callout-success">
              <h4>Sukses men-generate ulang sertifikat!</h4>
              <p>Download sertifikat <a href="{{route('download', ['filename' => $message])}}">disini</a>.</p>
          </div>
      @endif
      <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Daftar Sertifikat</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Sertifikat</th>
                                <th>Tanggal</th>
                                <th style="width:200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trainings as $training)
                                <tr>
                                    <td>{{$training->judul}}</td>
                                    <td>{{date('d F Y', strtotime($training->tanggal_mulai))}}</td>
                                    <td>
                                      <a href="{{route('download', ['filename' => $training->filename])}}"><button class="btn btn-primary btn-flat">Download</button></a>
                                      <a href="{{route('generate', ['training_id' => $training->id])}}"><button class="btn btn-warning btn-flat">Generate Ulang</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
