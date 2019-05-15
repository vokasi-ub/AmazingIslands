<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Contact</title>

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
            <h2>Contact</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Contact</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3994597765522!2d112.60470501386008!3d-7.95760578149692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78826359eeae99%3A0x873cc185fb236e92!2sAyam+Pakuan+Malang!5e0!3m2!1sen!2sid!4v1557905544011!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
              <div class="aa-contact-top-right">
                <h2>Contact</h2>
                <p>Ini adalah kontak kita. Hubungi jika anda membetuhkan bantuan. Terima Kasih :D</p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i> 087784150989</li>
                  <li> <i class="fa fa-envelope-o"></i> naupalsidqi55@gmail.com</li>
                  <li> <i class="fa fa-map-marker"></i> Jl. Sigura-gura No 46</li>
                </ul>
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