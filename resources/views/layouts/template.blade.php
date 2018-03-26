<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>koperasi Sekolah</title>
  <link href="{{asset ('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{asset ('css/datepicker3.css') }}" rel="stylesheet">
  <link href="{{asset ('css/styles.css') }}" rel="stylesheet">
  
  <!--Custom Font-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:0000 1600 4600 6f00 6e00 7400 4100 7700" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="#"><span>Koperasi</span>Sekolah</a>
        <ul class="nav navbar-top-links navbar-right">
         
      </div>
    </div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
      <div class="profile-userpic">
       
      </div>
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">{{ Auth::user()->name }}</div>
        <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider"></div>

                        @role('admin')
    <ul class="nav menu">


            <li><a href="{{ route('jenis.index')}}">Jenis Barang</a></li>
            <li><a href="{{ route('supplier.index')}}">Supplier</a></li>
            <li><a href="{{ route('barang.index')}}">Barang</a></li>            
            <li><a href="{{ route('pembelian.index')}}">Pembelian</a></li>
            <li><a href="{{ route('penjualan.index')}}">Penjualan</a></li>
            <li><a href="{{ url('/jual') }}">Laporan Penjualan</a></li>
            <li><a href="{{ url('/beli') }}">Laporan Pembelian</a></li>

                                    


                           
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                            Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
       
                               
                                </ul>
                                  </li>
                                 
                        @endrole


 @role('karyawan')
    <ul class="nav menu">


           
            <li><a href="{{ route('barang.index')}}">Barang</a></li>            
            <li><a href="{{ route('pembelian.index')}}">Pembelian</a></li>
            <li><a href="{{ route('penjualan.index')}}">Penjualan</a></li>
            <li><a href="{{ route('laporan.index')}}">Laporan Keuangan</a></li>

                                    


                           
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                            Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
       
                               
                                </ul>
                                  </li>
                                 
                        @endrole



         
  </div><!--/.sidebar-->
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

      <ol class="breadcrumb">
        <li>
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Koperasi Sekolah</li>
      </ol>
    </div><!--/.row-->

    
 @include('layouts._flash')
        @yield('content')
  <script src="{{asset ('js/jquery-1.11.1.min.js') }}"></script>
  <script src="{{asset ('js/bootstrap.min.js') }}"></script>
  <script src="{{asset ('js/chart.min.js') }}"></script>
  <script src="{{asset ('js/chart-data.js') }}"></script>
  <script src="{{asset ('js/easypiechart.js') }}"></script>
  <script src="{{asset ('js/easypiechart-data.js') }}"></script>
  <script src="{{asset ('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{asset ('js/custom.js') }}"></script>
  <script>
    window.onload = function () {
  var chart1 = document.getElementById("line-chart").getContext("2d");
  window.myLine = new Chart(chart1).Line(lineChartData, {
  responsive: true,
  scaleLineColor: "rgba(0,0,0,.2)",
  scaleGridLineColor: "rgba(0,0,0,.05)",
  scaleFontColor: "#c5c7cc"
  });
};
  </script>
    
</body>
</html>