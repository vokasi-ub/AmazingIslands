<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Properties Details</title>

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
  <body class="aa-price-range">  
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
            <h2>Properties Details</h2>
            <ol class="breadcrumb">
            <li><a href="/">HOME</a></li>            
            <li class="active">APPARTMENT TITLE</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
            @foreach($cave as $cave)
             <div class="aa-properties-details-img">
             <img src="{{asset('/image/'. $cave->gambar_pulau)}}" alt="img">
               <img src="assetsIndex/img/rangyai1.jpg" alt="img">
               <img src="assetsIndex/img/rangyai2.jpg" alt="img">
             </div>
             <div class="aa-properties-info">
               <h2>{{$cave->nama_pulau}}</h2>
               <span class="aa-price">$ {{ number_format($cave->harga, 2) }}</span>
               </p>{{$cave->deskripsi}}</p>
               
               <h4>Property Video</h4>
               <iframe width="100%" height="480" src="https://www.youtube.com/embed/CegXQps0In4" frameborder="0" allowfullscreen></iframe>
               <h4>Property Map</h4>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6851.201919469417!2d-86.11773906635584!3d33.47324776828677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888bdb60cc49c571%3A0x40451ca6baf275c7!2s36008+AL-77%2C+Talladega%2C+AL+35160%2C+USA!5e0!3m2!1sbn!2sbd!4v1460452919256" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
             <!-- Properties social share -->
             <div class="aa-properties-social">
               <ul>
                 <li>Share</li>
                 <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                 <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
               </ul>
             </div>
      <!-- Nearby properties -->
      <div class="aa-nearby-properties">
               <div class="aa-title">
                 <h2>Nearby Properties</h2>
                 <span></span>
               </div>
               <div class="aa-nearby-properties-area">
                 <div class="row">
                   <div class="col-md-6">
                   @foreach($rangyai as $rangyai)
                     <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="rangyai">
                        <img src="{{asset('/image/'. $rangyai->gambar_pulau)}}" alt="img">
                        </a>
                        <div class="aa-tag for-sale">
                          {{$rangyai->status}}
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="rangyai">{{$rangyai->nama_pulau}}</a></h3>
                            <p>Luar biasa baru kustom high end 5 kamar tidur, 6 kamar mandi rumah di pulau pribadi.
                     Pulau pribadi Anda sendiri!</p>
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $ {{ number_format($rangyai->harga, 2) }}
                            </span>
                            <a class="aa-secondary-btn" href="rangyai">View Details</a>
                          </div>
                        </div>
                        @endforeach
                      </article>
                   </div>
                   <div class="col-md-6">
                   @foreach($macan as $macan)
                     <article class="aa-properties-item">
                        <a class="aa-properties-item-img" href="macan">
                        <img src="{{asset('/image/'. $macan->gambar_pulau)}}" alt="img">
                        </a>
                        <div class="aa-tag for-sale">
                          {{$macan->status}}
                        </div>
                        <div class="aa-properties-item-content">
                          <div class="aa-properties-info">
                            <span>5 Rooms</span>
                            <span>2 Beds</span>
                            <span>3 Baths</span>
                            <span>1100 SQ FT</span>
                          </div>
                          <div class="aa-properties-about">
                            <h3><a href="macan">{{$macan->nama_pulau}}</a></h3>
                            <p> Orang tidak akan mengira bahwa hanya dua jam perjalanan singkat dengan speedboat dari kota metropolitan
                            yaitu Jakarta, Anda akan...</p>    
                          </div>
                          <div class="aa-properties-detial">
                            <span class="aa-price">
                              $ {{ number_format($macan->harga, 2) }}
                            </span>
                            <a class="aa-secondary-btn" href="maacan">View Details</a>
                          </div>
                        </div>
                        @endforeach
                      </article>
                   </div>
                 </div>
               </div>
             </div>
            </div>           
          </div>
        </div>
        
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Detail Pulau</h3>
              <hr style="border-width: 3px; border-color: deepskyblue">
              <form action="">
                <div class="aa-single-advance-search">
                <b>Status &nbsp;&nbsp;&nbsp;: {{$cave->status}}</b>
                </div>
                <div class="aa-single-advance-search">
                <b>Negara &nbsp;: {{$cave->nama_negara}}</b>
                </div>
                <div class="aa-single-advance-search">
                <b>Lokasi &nbsp;&nbsp;: {{$cave->lokasi}}</b>
                </div>
                <div class="aa-single-advance-search">
                <b>Luas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$cave->luas}} Acres<b>
                </div>
                <div class="aa-single-advance-search">
                <br><a class="aa-secondary-btn" href="maacan">Inquire Now</a>
                </div>
              </form>
            </div> 
            <!-- Start Single properties sidebar -->   
  </section>
  <!-- / Properties  -->
  <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-bottom">
              <div class="aa-title">
                <h2>Inquire About This Island</h2>
                <span></span>
                <p>You must login or register for inquire this island <strong class="required">*</strong></p>
              </div>
              <div class="aa-contact-form">
                <form class="contactform" action="storeInquire" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                  <p class="comment-form-author">
                    <input type="text" name="id_pulau" value="{{$cave->id_pulau }}" size="30" required="required" style="display:none">
                  </p>
                  @endforeach  
                  @if(auth()->check())                
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input type="text" value="{{ Auth::user()->name }}" size="30" required="required">
                  </p>
                  <p class="comment-form-author">
                    <input type="text" name="user_id" value="{{ Auth::user()->id }}" size="30" required="required" style="display:none">
                  </p>
                  @else
                  <p class="comment-form-author">
                    <label for="author">Name <span class="required">*</span></label>
                    <input type="text" name="name" value="" size="30" required="required">
                  </p>
                  @endif             
                  @if(auth()->check())  
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" value="{{ Auth::user()->email }}" aria-required="true" required="required">
                  </p>
                  @else
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" value="" aria-required="true" required="required">
                  </p>
                  @endif
                  @if(auth()->check())
                  <p class="comment-form-url">
                    <label for="subject">Nomor HP</label>
                    <input type="text" name="no_hp" value="{{ Auth::user()->no_hp }}">  
                  </p>
                  @else
                  <p class="comment-form-url">
                    <label for="subject">Nomor HP</label>
                    <input type="text" name="no_hp">  
                  </p>
                  @endif
                  @if(auth()->check())
                  <p class="comment-form-comment">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" cols="45" rows="8" aria-required="true" required="required">{{ Auth::user()->alamat }}</textarea>
                  </p>
                  @else
                  <p class="comment-form-comment">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" cols="45" rows="8" aria-required="true" required="required"></textarea>
                  </p>
                  @endif
                  <p class="comment-form-author">
                    <label for="author">Total Orang </label>
                    <input type="text" name="total_orang" value="" size="30" required="required">
                  </p>
                  <p class="comment-form-author">
                    <label for="author">Tanggal Penyewaan </label>
                    <input type="date" name="tanggal" value="" size="30" required="required">
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Pesan</label>
                    <textarea name="pesan" cols="45" rows="8" aria-required="true" required="required"></textarea>
                  </p>                 
                  <p class="form-submit">
                    <input type="submit" name="submit" class="aa-browse-btn" value="Send Message">
                  </p>        
                  
                </form>
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