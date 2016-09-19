    <!DOCTYPE html>
    <html>

    <!-- Mirrored from www.riaxe.com/marketplace/thin-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2016 06:51:35 GMT -->
    <head>
        <title>Learning</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/thin-admin.css')}}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet" media="screen">
        <link href="{{ asset('style/style.css')}}" rel="stylesheet">
        <link href="{{ asset('style/dashboard.css')}}" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
        <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link href="{{ asset('css/demo_page.css') }}" rel="stylesheet">
        <link href="{{ asset('css/demo_table.css') }}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
      <![endif]-->

  </head>
  <body>
    <div class="container">
      <div class="top-navbar header b-b"> <a data-original-title="Toggle navigation" class="toggle-side-nav pull-left" href="#"><i class="icon-reorder"></i> </a>
        <div class="brand pull-left"> 
            <a href="{{url('admin')}}">
              <h2 style="color:white;">ELEARNING</h2>
              <!-- <img src="images/logo.png" width="147" height="33"> -->
            </a>
          </div>
        <ul class="nav navbar-nav navbar-right  hidden-xs">
          <li class="dropdown user  hidden-xs"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <i class="icon-male"></i> <span class="username">{{Auth::user()->name}}</span> <i class="icon-caret-down small"></i> </a>
              <ul class="dropdown-menu">
                <li><a href="{{url('logout')}}"><i class="icon-key"></i> Log Out</a></li>
            </ul>
          </li>
        </ul>

</div>
</div>
<div class="wrapper">
  <div class="left-nav">
    <div id="side-nav">
      <ul id="nav">
        <li class="current"> <a href="{{ url('admin')}}"> <i class="icon-dashboard"></i> Dashboard </a> </li>
        
    <li> <a href="#"> <i class="icon-edit"></i>Playlist<i class="arrow icon-angle-left"></i></a>
      <ul class="sub-menu">
        <li> <a href="{{ url('playlist_form') }}"> <i class="icon-angle-right"></i> Add Playlist </a> </li>
        <li> <a href="{{ url('playlist_view') }}"> <i class="icon-angle-right"></i> View All Playlist</a> </li>
      </ul>
</li>

</ul>
</div>
</div>
  <!-- Page Content start -->
      
      @yield('content')
      
  <!-- Page Contetn End -->

</div>
<div class="bottom-nav footer"> 2016 &copy; Elearning by Information Technology Excellence Center. </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="{{ asset('js/jquery.js')}}"></script> 
<script src="{{ asset('js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="js/smooth-sliding-menu.js"></script> 
<script class="include" type="text/javascript" src="{{ asset('javascript/jquery191.min.js')}}"></script> 
<script class="include" type="text/javascript" src="{{ asset('javascript/jquery.jqplot.min.js')}}"></script> 
<script src="{{ asset('assets/sparkline/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/sparkline/jquery.customSelect.min.js')}}" ></script>
<script src="{{ asset('assets/sparkline/sparkline-chart.js')}}"></script>
<script src="{{ asset('assets/sparkline/easy-pie-chart.js')}}"></script>
<script src="{{ asset('js/select-checkbox.js')}}"></script> 
<script src="{{ asset('js/to-do-admin.js')}}"></script> 

<!--switcher html start-->
<!-- <div class="demo_changer active" style="right: 0px;">
  <div class="demo-icon"></div>
  <div class="form_holder">
    <div class="predefined_styles"> <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a> <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a> <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a> <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a> <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a> <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a> <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a> <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a> <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a> <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a> </div>
  </div>
</div> -->

<!--switcher html end--> 
<script src="{{ asset('assets/switcher/switcher.js')}}"></script> 
<script src="{{ asset('assets/switcher/moderziner.custom.js')}}"></script>
<script type="text/javascript" language="javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
        $('#example').dataTable( {
          "sPaginationType": "full_numbers"
        } );
      } );
    </script>
<link href="{{ asset('assets/switcher/switcher.css')}}" rel="stylesheet">
<link href="{{ asset('assets/switcher/switcher-defult.css')}}" rel="stylesheet">
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/a.css')}}" title="a" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/b.css')}}" title="b" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/c.css')}}" title="c" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/d.css')}}" title="d" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/e.css')}}" title="e" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/f.css')}}" title="f" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/g.css')}}" title="g" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/h.css')}}" title="h" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/i.css')}}" title="i" media="all" />
<link rel="alternate stylesheet" type="text/css" href="{{ asset('assets/switcher/j.css')}}" title="j" media="all" />



</body>

<!-- Mirrored from www.riaxe.com/marketplace/thin-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Apr 2016 06:52:02 GMT -->
</html>
