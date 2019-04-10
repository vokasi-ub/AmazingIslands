<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Home Property | Home</title>
    
    
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

  <!-- Start slider  -->
  <section id="aa-slider">
    @include('includes.slider')
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select>
                   <option value="0" selected>Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select>
                    <option value="0" selected>Type</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
              </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
            </div>
          </div>
         <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>PRICE ($)</span>
                <span>FROM</span>
                <span id="skip-value-lower2" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper2" class="example-val">100.00</span>
                <div id="aa-price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>      
              </div>
            </div>
          </div>  
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="assetsIndex/img/about.jpg" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Amazing Islands</h2>
                    <span></span>
                  </div>
                  <p style="font-family:">
                    &nbsp;&nbsp;&nbsp;Amazing Islands adalah satu-satunya situs web real estat internasional
                    yang didedikasikan khusus untuk properti pulau. Didirikan pada tahun 2019, situs yang sepenuhnya 
                    dicari dan interaktif ini menyatukan pasar pulau yang terpecah-pecah dan berbeda. Dengan berbagai 
                    pilihan pulau yang menarik, Private Islands Online adalah pusat dunia pulau.
                    <br><br>
                    Amazing Islands bekerja dengan perwakilan - pemilik atau agen - memastikan bahwa 
                    perusahaan paling berpengalaman dan berpengetahuan luas. Hubungan yang kami bangun dengan para pakar 
                    pulau regional adalah pintu gerbang untuk mengakses properti yang saat ini diiklankan dan memastikan 
                    bahwa Anda menerima informasi pulau terbaru.
                  </p>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->

  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Our Signature Islands</h2>
          <span></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>         
        </div>
        <div class="aa-latest-properties-content">
          <div class="row">
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($rangyai as $rangyai)
                <a href="rangyai" class="aa-properties-item-img">
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
                    <p>Terletak di sebelah timur pulau Phuket, sebuah pulau yang populer di kalangan 
                    wisatawan dan pemilik tanah, Rangyai adalah pulau terbesar ...</p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $ {{ number_format($rangyai->harga, 2) }}
                    </span>
                    <a href="rangyai" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($es as $es)
                <a href="eshpabekong" class="aa-properties-item-img">
                  <img src="{{asset('/image/'. $es->gambar_pulau)}}" alt="img">
                </a>                
                <div class="aa-tag for-sale">
                  {{$es->status}}
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="eshpabekong">{{$es->nama_pulau}}</a></h3>
                    <p>Sebuah pulau besar granit Precambrian berwarna merah muda dan abu-abu berangsur-angsur menuju 
                    air yang berkilauan dengan... </p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                    $ {{ number_format($es->harga, 2) }}
                    </span>
                    <a href="eshpabekong" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
               @endforeach
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($little as $little)
                <a href="little" class="aa-properties-item-img">
                <img src="{{asset('/image/'. $little->gambar_pulau)}}">
                </a>
                <div class="aa-tag for-rent">
                  {{$little->status}}
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="little">{{$little->nama_pulau}}</a></h3>
                    <p>Luar biasa baru kustom high end 5 kamar tidur, 6 kamar mandi rumah di pulau pribadi.
                     Pulau pribadi Anda sendiri!</p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                    $ {{ number_format($little->harga, 2) }}
                    </span>
                    <a href="little" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($lambay as $lambay)
                <a href="lambay" class="aa-properties-item-img">
                <img src="{{asset('/image/'. $lambay->gambar_pulau)}}">
                </a>
                <div class="aa-tag for-sale">
                  {{$lambay->status}}
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="lambay">{{$lambay->nama_pulau}}</a></h3>
                    <p>Akses mudah ke penyelaman luar biasa adalah salah satu fasilitas khusus kepemilikan pulau 
                    pribadi tropis, tetapi hanya beberapa...</p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $ {{number_format($lambay->harga, 2)}}
                    </span>
                    <a href="lambay" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($macan as $macan)
                <a href="macan" class="aa-properties-item-img">
                <img src="{{asset('/image/'. $macan->gambar_pulau)}}">
                </a>
                <div class="aa-tag for-rent">
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
                      $ {{number_format($macan->harga, 2)}}
                    </span>
                    <a href="macan" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
            <div class="col-md-4">
              <article class="aa-properties-item">
              @foreach($cave as $cave)
                <a href="cave" class="aa-properties-item-img">
                <img src="{{asset('/image/'. $cave->gambar_pulau)}}">
                </a>
                <div class="aa-tag for-sale">
                  {{$cave->status}}
                </div>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span>5 Rooms</span>
                    <span>2 Beds</span>
                    <span>3 Baths</span>
                    <span>1100 SQ FT</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="cave">{{$cave->nama_pulau}}</a></h3>
                    <p>Jarang ada pulau dengan atribut Cave Cay yang tersedia. Keindahan alam yang 
                    menakjubkan, pelabuhan dan marina perairan dalam yang...</p>
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      $ {{number_format($cave->harga, 2)}}
                    </span>
                    <a href="cave" class="aa-secondary-btn">View Details</a>
                  </div>
                </div>
                @endforeach
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Sale</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Market Analysis</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->

  <!-- Promo Banner Section -->
  <section id="aa-promo-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-banner-area">
            <h3>Find Your Best Islands</h3>
            <p>Temukan pulau impian anda disini dan dapatkan penawaran terbaik</p><br>
            <a href="#" class="aa-view-btn">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Promo Banner Section -->

  <!-- Our Agent Section-->
  
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>CEO Message</h2>
              <span></span>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="assetsAdmin/img/avatar.jpg" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p style="font-size:15px">Perusahaan saya terinspirasi oleh momen ajaib bersama dengan kesadaran orang dewasa bahwa
                       banyak orang berbagi cinta saya untuk kesenangan sederhana kehidupan pulau. Bahkan para penghuni
                        kota yang paling sulit sekalipun terkadang merasakan kebutuhan untuk berhubungan kembali dengan 
                        alam dengan cara yang semakin sulit ditemukan di daratan. Amazing Islands membantu klien 
                        menciptakan tempat perlindungan mereka sendiri jauh dari mata dan hiruk pikuk dunia.
                      </p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>Alek</p>
                      <span>CEO</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-4.png" alt="brand image">
                </div>
              </li>
               <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-1.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-2.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-3.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-5.png" alt="brand image">
                </div>
              </li>
              <li>
                <div class="aa-client-single-brand">
                  <img src="assetsIndex/img/client-brand-4.png" alt="brand image">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client brand -->

  <!-- Latest blog -->
  <section id="aa-latest-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-latest-blog-area">
            <div class="aa-title">
              <h2>Latest News</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe magni, est harum repellendus. Accusantium, nostrum!</p>
            </div>
            <div class="aa-latest-blog-content">
              <div class="row">
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="assetsIndex/img/blog-img-1.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>
                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="assetsIndex/img/blog-img-2.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
                <!-- start single blog -->
                <div class="col-md-4">
                  <article class="aa-blog-single">
                    <figure class="aa-blog-img">
                      <a href="#"><img src="assetsIndex/img/blog-img-3.jpg" alt="img"></a>
                      <span class="aa-date-tag">15 April, 16</span>
                    </figure>
                    <div class="aa-blog-single-content">
                      <h3><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                      <div class="aa-blog-single-bottom">
                        <a href="#" class="aa-blog-author"><i class="fa fa-user"></i> Admin</a>
                        <a href="#" class="aa-blog-comments"><i class="fa fa-comment-o"></i>6</a>
                      </div>
                    </div>                   
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest blog -->

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