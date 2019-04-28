<div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-header-area">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="aa-header-left">
                  <div class="aa-telephone-no">
                    <span class="fa fa-phone"></span>
                    1-900-523-3564
                  </div>
                  <div class="aa-email hidden-xs">
                    <span class="fa fa-envelope-o"></span> info@markups.com
                  </div>
                </div>              
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="aa-header-right" id="navbarSupportedContent">
                        @guest
                                <a class="aa-register" href="{{ route('login') }}">{{ __('Login') }}</a>  
                            @if (Route::has('register'))      
                                    <a class="aa-login" href="{{ route('login') }}">{{ __('Register') }}</a>       
                            @endif
                        @else
                                <a id="navbarDropdown" class="aa-login" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                
                        @endguest
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>