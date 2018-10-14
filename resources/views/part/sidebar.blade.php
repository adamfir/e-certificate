<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li @if (\Request::route()->getName()=='home') class="active" @endif >
                <a href="/">
              <i class="fa fa-pencil"></i> <span>Input Data</span>
            </a>
            </li>
            </li>
            <li @if (\Request::route()->getName()=='list') class="active" @endif >
                <a href="/list">
              <i class="fa fa-book"></i> <span>Daftar Sertifikat</span>
            </a>
            </li>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>