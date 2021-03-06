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
          
          <!-- TOP HEAD -->
          <div class="top-head">
            <div class="row">
              <div class="col-sm-6">
                <h4>Resume Of Md Ikbal Hossain </h4>
                <!-- <a href="resume(edit-mode).html">Edit Resume</a>  -->
              </div>
              <div class="col-sm-6"> <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a> </div>
            </div>
          </div>
          
          <!-- Resume -->
          <div class="row"> 
          @include('remotecv::blocks.sidebar_profile') 
            
            <!-- MAIN CONTENT -->
            <div class="col-md-8">               
              <!-- NAV LINKS -->              
              <nav> 
                <!-- Brand and toggle get grouped for better mobile display -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span> <span class="fa fa-navicon icon-nav"></span> </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="nav-tabis">
                  <ul class="isop-filter nav nav-pills">
                    <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me" role="tab" data-toggle="tab"><i class="icon-user"></i> ABOUT ME</a></li>
                    <li role="presentation"><a href="#resume" aria-controls="resume" role="tab" data-toggle="tab"><i class="icon-book-open"></i>RESUME</a></li>
                    <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab"><i class="icon-rocket"></i>PORTFOLIO</a></li>
                    <li role="presentation"><a href="#blog" aria-controls="blog" role="tab" data-toggle="tab"><i class="icon-note"></i>BLOG</a></li>
                    <li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab"> <i class="icon-pencil"></i>CONTACT ME</a></li>
                  </ul>
                </div>
              </nav>
              <!-- NAV LINKS END -->                  
              <div class="tab-content">      
                         
                <!-- ABOUT ME -->
                <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">About Me</h5>
                    
                    <!-- Blog -->
                    <section class="about-me padding-top-10"> 
                      
                      <!-- Personal Info -->
                      <ul class="personal-info">
                        <li>
                          <p> <span> Name</span> Md Ikbal Hossain </p>
                        </li>
                        <li>
                          <p> <span> Age</span> 28 Years </p>
                        </li>
                        <li>
                          <p> <span> Location</span> Dhaka, Bangladesh </p>
                        </li>
                        <li>
                          <p> <span> Experience</span> 4.5 Years </p>
                        </li>
                        <li>
                          <p> <span> Degree</span> EEE, MCA </p>
                        </li>
                        <li>
                          <p> <span> Career Level</span> Mid-Level </p>
                        </li>
                        <li>
                          <p> <span> Phone</span> +8801726209373</p>
                        </li>
                        <li>
                          <p> <span> FAX</span> (800) 123-4568 </p>
                        </li>
                        <li>
                          <p> <span> E-mail</span> <a href="#."> md.ikbalhossain@gmail.com</a> </p>
                        </li>
                        <li>
                          <p> <span> Website</span><a href="#."> ikbalhossain.com </a></p>
                        </li>
                      </ul>
                      
                      <!-- I’m Web Designer -->
                      <h5 class="tittle">I’m Web Designer</h5>
                      <div class="padding-20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam. <br>
                          <br>
                          Quisque semper justo at risus. Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis. Phasellus congue lacus eget neque. Phasellus ornare, ante vitae consectetuer consequat, purus sapien ultricies dolor, et mollis pede metus eget nisi. <br>
                          <br>
                        </p>
                      </div>
                      
                      <!-- Services -->
                      <h5 class="tittle">Services</h5>
                      <div class="row padding-20 margin-top-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-whatsapp"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DEVELOPMENT</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-magic"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">WEB DESIGN</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4 text-center">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-smile-o"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">RESPONSIVE</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Icon Row -->
                      <div class="row padding-20 margin-bottom-50"> 
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-diamond"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Unique Design</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-server"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Demos Layout</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Icon -->
                        <div class="col-md-4">
                          <div class="icon-box i-large ib-black">
                            <div class="ib-icon"> <i class="fa fa-scissors"></i> </div>
                            <div class="ib-info">
                              <h4 class="h6">Clean Code</h4>
                              <p>We have created the new macbook psd version with scalable vector shapes.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Skills -->
                      <h5 class="tittle">Skills</h5>
                      
                      <!-- Sound Engineering -->
                      <div class="panel-group accordion padding-20" id="accordion">
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"> Photoshop</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapseOne" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- Business Administration -->
                        
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" class="collapsed"> Dreamviewer</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapsetwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <!-- HTML -->
                        <div class="panel panel-default">
                          <div class="row">
                            <div class="col-sm-4"> 
                              <!-- PANEL HEADING -->
                              <div class="panel-heading">
                                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapsethree" class="collapsed"> HTML5/CSS3</a> </h4>
                              </div>
                            </div>
                            
                            <!-- Skillls Bars -->
                            <div class="col-sm-8">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">60% Complete</span> </div>
                              </div>
                              
                              <!-- Skillls Text -->
                              <div id="collapsethree" class="panel-collapse collapse">
                                <div class="panel-body">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
                
                <!-- RESUME -->
                <div role="tabpanel" class="tab-pane fade" id="resume">
                  @include('remotecv::blocks.resume')
                </div>
                
                <!-- PORTFOLIO -->
                <div role="tabpanel" class="tab-pane fade" id="portfolio">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">PORTFOLIO</h5>
                    
                    <!-- PORTFOLIO -->
                    <section class="portfolio padding-top-50 padding-bottom-50"> 
                      <!-- Work Filter --> 
                      <!-- PORTFOLIO ITEMS -->
                      <div id="Container" class="item-space row col-3"> 
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-1.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-photography pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-2.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-3.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-4.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-branding-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-5.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-design pf-digital-art">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-7.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-digital-art ">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-8.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                        
                        <!-- ITEM -->
                        <article class="portfolio-item mix pf-web-design pf-branding-design">
                          <div class="portfolio-image"> <a href="#."> <img class="img-responsive" alt="Open Imagination" src="images/portfolio/5/img-9.jpg"> </a>
                            <div class="portfolio-overlay style-4">
                              <div class="detail-info">
                                <div class="position-center-center">
                                  <h3 class="no-margin">Assembly Branding</h3>
                                  <span><a href="#.">Fashion / trending</a></span> <a href="#." class="go"><i class="fa fa-search"></i></a> <a href="#." class="go"><i class="fa fa-link"></i></a> </div>
                              </div>
                            </div>
                          </div>
                        </article>
                      </div>
                    </section>
                  </div>
                </div>
                
                <!-- BLOG -->
                <div role="tabpanel" class="tab-pane fade" id="blog">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">BLOG</h5>
                    
                    <!-- Blog -->
                    <section class="blog blog-page padding-20 padding-top-50 padding-bottom-50 "> 
                      
                      <!-- Blog Post -->
                      <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      <article> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- BLOG POST -->
                      
                      <article> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" >
                        <div class="post-info">
                          <div class="post-in">
                            <div class="extra"> <span><i class="icon-calendar"></i>Aug 29, 2015</span> <span class="margin-left-15"><i class="icon-user"></i>Admin</span> <span class="margin-left-15"><i class="icon-bubbles"></i> Featured</span></div>
                            <a href="#." class="tittle-post"> ENJOYING THE SMALL THINGS </a>
                            <p>t's time to play the music. It's time to light the lights. It's time to meet the Muppets on the Muppet Show tonight! Boy the way Glen Miller played Songs the hit parade. Guys like us we had it made. Those were the days. These Happy Days are yours and mine Happy Days.</p>
                            <a href="#." class="btn-1">Read MOre <i class="fa fa-angle-right"></i></a> </div>
                        </div>
                      </article>
                      
                      <!-- Pagination -->
                      <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </section>
                  </div>
                </div>
                
                <!-- Contact -->
                <div role="tabpanel" class="tab-pane fade" id="contact">
                  <div class="inside-sec"> 
                    <!-- BIO AND SKILLS -->
                    <h5 class="tittle">CONATCT ME</h5>
                    
                    <!-- Conatct Pages  -->
                    <section>
                      <div class="padding-left-30 padding-right-30 padding-top-50 padding-bottom-50">
                        <div class="row "> 
                          <!-- Phone Number  -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-xlarge dark-text">
                              <div class="ib-icon"> <i class="fa fa-mobile text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p>+61 3 8376 6284</p>
                                <p>+61 3 8376 6284</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Address -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                              <div class="ib-icon"> <i class="fa fa-map-marker text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p>PO Box 21177 Litte Lonsdale St, Melbourne Victoria 8011 Australia</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- Email  -->
                          <div class="col-md-4 text-center">
                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                              <div class="ib-icon"> <i class="fa fa-envelope-o text-primary"></i> </div>
                              <div class="ib-info text-dark">
                                <p class="no-margin-bottom"><a href="#." class="text-white">support@yourcompany.com</a></p>
                                <p class="no-margin-bottom"><a href="#." class="text-white">support@yourcompany.com</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- MAP -->
                      <section class="map-block">
                        <div class="map-wrapper" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1"></div>
                        <div class="markers-wrapper addresses-block"> <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Envato"></a> </div>
                      </section>
                      
                      <!-- Contact  -->
                      <h5 class="tittle">SAY HELLO</h5>
                      <div class="contact style-3 light-border padding-top-50 padding-bottom-50 padding-left-20 padding-right-20"> 
                        
                        <!-- Form  -->
                        <div class="contact-right"> 
                          <!-- Success Msg -->
                          <div id="contact_message_1" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
                          
                          <!-- FORM -->
                          <form role="form" id="contact_form_1" class="contact-form" method="post" onSubmit="return false">
                            <ul class="row">
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="name" id="name_1" placeholder="NAME">
                                </label>
                              </li>
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="email" id="email_1" placeholder="EMAIL">
                                </label>
                              </li>
                              <li class="col-sm-4">
                                <label>
                                  <input type="text" class="form-control" name="company" id="company_1" placeholder="SUBJECT">
                                </label>
                              </li>
                              <li class="col-sm-12">
                                <label>
                                  <textarea class="form-control" name="message" id="message_1" rows="5" placeholder="CONTENT..."></textarea>
                                </label>
                              </li>
                              <li class="col-sm-12">
                                <button type="submit"  value="submit" id="btn_submit_1" onClick="proceed();">SEND ME</button>
                              </li>
                            </ul>
                          </form>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>


              </div>
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