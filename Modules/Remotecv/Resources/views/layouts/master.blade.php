<?php
  $birthday = "12-05-1989";
?>


<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from new.uouapps.com/remoticv/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2017 10:29:22 GMT -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>Resume / CV Of Ikbal Hossain</title>
<?php    
    $assetspath    = 'modules/'.Module::find('remotecv'); 
    //$assetspath    = Module::assetPath('remotecv');      
?>
<!-- StyleSheets -->
{{ Html::style($assetspath.'/css/ionicons.min.css') }}
{{ Html::style($assetspath.'/css/ionicons.min.css') }}
{{ Html::style($assetspath.'/css/bootstrap/bootstrap.min.css') }}
{{ Html::style($assetspath.'/css/font-awesome.min.css') }}
{{ Html::style($assetspath.'/css/main.css') }}
{{ Html::style($assetspath.'/css/style.css') }}
{{ Html::style($assetspath.'/css/responsive.css') }}

<!-- FontsOnline -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
{{ Html::script($assetspath.'/js/vendors/modernizr.js') }}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<!-- Page Wrapper -->
<div id="wrap"> 
  
    @include('remotecv::blocks.navigation')
  
  <!-- Content -->
    <main class="cd-main-content">
  <div id="content">
    <div class="resume">
      <div class="container"> 
        

         <!-- NAV LINKS -->
          <nav> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav-tabis">
              <ul class="isop-filter main-nav">
                <li class="active"><a href="#." ><i class="icon-user"></i> ABOUT ME</a></li>
                <li ><a href="resume.html" ><i class="icon-book-open"></i>RESUME</a></li>
                <li ><a href="portfolio.html" ><i class="icon-rocket"></i>PORTFOLIO</a></li>
                <li ><a href="blog.html" ><i class="icon-note"></i>BLOG</a></li>
                <li ><a href="contact.html" ><i class="icon-pencil"></i>CONTACT ME</a></li>
                <li ><a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a></li>
              </ul>
            </div>
          </nav>
          <!-- NAV LINKS END -->

        <!-- Resume -->
        <div class="row">           
          @include('remotecv::blocks.sidebar_profile')          
          <!-- MAIN CONTENT -->
          <div class="col-md-8">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
    </main>
  <!-- End Content --> 
  
  @include('remotecv::blocks.footer')

  
</div>
<!-- End Page Wrapper --> 

<!-- JavaScripts --> 
{{ Html::script($assetspath.'/js/vendors/jquery/jquery.min.js') }}
{{ Html::script($assetspath.'/js/vendors/bootstrap.min.js') }}
{{ Html::script($assetspath.'/js/vendors/owl.carousel.min.js') }}
{{ Html::script($assetspath.'/js/vendors/jquery.isotope.min.js') }}
{{ Html::script($assetspath.'/js/main.js') }}

<!-- Begin Map Script--> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script> 
{{ Html::script($assetspath.'/js/vendors/map.js') }}
</body>

<!-- Mirrored from new.uouapps.com/remoticv/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2017 10:30:35 GMT -->
</html>