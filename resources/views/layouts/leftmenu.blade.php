<div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a href="admin"><span class="fa-home fa"></span> Dashboard
                      </a>
                    </li>
                    <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Tables  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                      <ul class="nav nav-list tree">
                        <li><a href="tb_pulau">Tabel Pulau</a></li>
                        <li><a href="tb_inquire">Tabel Inquire</a></li>
                        <li><a href="tb_user">Tabel Users</a></li>
                      </ul>
                    </li>
                    <li class="ripple">
                    <a href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <span class="fa fa-power-off "></span>Logout</a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                      </a>
                    </li>
                  </ul>
                </div>
                