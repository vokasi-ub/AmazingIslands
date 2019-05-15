<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Gallery</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL :: asset('assetsIndex/assetsIndex/img/favicon.ico') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ URL :: asset('assetsIndex/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL :: asset('assetsIndex/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL :: asset('assetsIndex/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL :: asset('assetsIndex/css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ URL :: asset('assetsIndex/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{ URL :: asset('assetsIndex/css/theme-color/default-theme.css') }}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="{{ URL :: asset('assetsIndex/css/style.css') }}" rel="stylesheet">     

   
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body>
 
  <!-- Pre Loader -->
  <div id="aa-preloader-area">
    <div class="pulse"></div>
  </div>
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">  
    @include('includes.header')
  </header>
  <!-- End header section -->
<!-- Start menu section -->
<section id="aa-menu-area">
    @include('includes.menu')
  </section>
  <!-- End menu section -->
  <!-- Start Proerty header  -->
  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Gallery</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Gallery</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <section id="aa-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-gallery-area">
            <div class="aa-title">
              <h2>Gallery View</h2>
              <span></span>
               <p>Our Gallery For Sale And Rent Islands</p>
            </div>
            <!-- Start gallery -->
            <div class="aa-gallery-content">
              <div class="aa-gallery-top">
                <!-- Start gallery menu -->
                <ul>
                  <li data-filter="all" class="filter active">All</li>
                  <li data-filter=".sale" class="filter">Sale</li>
                  <li data-filter=".rent" class="filter">Rent</li>
                </ul>
              </div>
              <!-- Start gallery image -->
              <div id="mixit-container" class="aa-gallery-body">
              @foreach($cave as $cave)
                <!-- start single gallery image -->
                <div class="aa-single-gallery mix rent">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $cave->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $cave->gambar_pulau)}}"><span class="fa fa-eye">
                      <a class="aa-link" href="cave"><span class="fa fa-link"></span></a>
                    </div>                  
                  </div>
                </div>
                @endforeach
                <!-- start single gallery image -->
                @foreach($es as $es)
                <div class="aa-single-gallery mix sale">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $es->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $es->gambar_pulau)}}"><span class="fa fa-eye"></span></a>
                      <a class="aa-link" href="eshpabekong"><span class="fa fa-link"></span></a>
                    </div>                  
                    @endforeach
                  </div>
                </div>
                <!-- start single gallery image -->
                @foreach($lambay as $lambay)
                <div class="aa-single-gallery mix sale">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $lambay->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $lambay->gambar_pulau)}}"><span class="fa fa-eye">
                      <a class="aa-link" href="lambay"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- start single gallery image -->
                @foreach($little as $little)
                <div class="aa-single-gallery mix rent">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $little->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $little->gambar_pulau)}}"><span class="fa fa-eye">
                      <a class="aa-link" href="little"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- start single gallery image -->
                @foreach($macan as $macan)
                <div class="aa-single-gallery mix rent">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $macan->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $macan->gambar_pulau)}}"><span class="fa fa-eye">
                      <a class="aa-link" href="macan"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
                <!-- start single gallery image -->
                @foreach($rangyai as $rangyai)
                <div class="aa-single-gallery mix sale">                  
                  <div class="aa-single-gallery-item">
                    <div class="aa-single-gallery-img">
                      <a href="#"><img src="{{asset('/image/'. $rangyai->gambar_pulau)}}" alt="img"></a>
                    </div>
                    <div class="aa-single-gallery-info">
                      <a class="fancybox" data-fancybox-group="gallery" href="{{asset('/image/'. $rangyai->gambar_pulau)}}"><span class="fa fa-eye">
                      <a class="aa-link" href="rangyai"><span class="fa fa-link"></span></a>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


   <!-- Footer -->
   <footer id="aa-footer">
    @include('includes.footer')
  </footer>
  <!-- / Footer -->

  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="{{ URL :: asset('assetsIndex/js/jquery.min.js') }}"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL :: asset('assetsIndex/js/bootstrap.js') }}"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="{{ URL :: asset('assetsIndex/js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ URL :: asset('assetsIndex/js/nouislider.js') }}"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="{{ URL :: asset('assetsIndex/js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{ URL :: asset('assetsIndex/js/jquery.fancybox.pack.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ URL :: asset('assetsIndex/js/custom.js') }}"></script> 
  </body>
</html>