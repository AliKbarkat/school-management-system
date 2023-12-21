        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="{{route('dashboard.index')}}"><img src="{{asset('assets/images/logo-dark.png')}}" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="{{route('dashboard.index')}}"><img src="{{asset('assets/images/logo-icon-dark.png')}}"
                    ></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
                <li class="nav-item">
                    <div class="search">
                        <a class="search-btn not_click" href="javascript:void(0);"></a>
                        <div class="search-box not-click">
                            <input type="text" class="not-click form-control" placeholder="Search" value=""
                                name="search">
                            <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                        </div>
                    </div>
                </li>
            </ul>
            
            <!-- top bar right -->
            <ul class="nav navbar-nav ml-auto">

                {{-- language website --}}
                <select name="" id="">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <option class="dropdown-item" rel="alternate" value="{{ $localeCode }}">
                        {{ $properties['name'] }}
                    </option>
                    @endforeach
                </select>
                <div class="btn-group mb-1">
                    <button type="button" class="btn btn-dark btn-md dropdown-toggle" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      @if (App::getLocale() == 'ar')
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{asset('assets/images/flags/EG.png')}}">
                      @else
                      {{ LaravelLocalization::getCurrentLocaleName() }}
                      <img src="{{asset('assets/images/flags/Us.png')}}">
                      @endif
                      </button>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                             <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                        @endforeach
                    </div>
                </div>
                {{-- end language website --}}
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ti-bell"></i>
                        <span class="badge badge-danger notification-status"> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                        <div class="dropdown-header notifications">
                            <strong>Notifications</strong>
                            <span class="badge badge-pill badge-warning">05</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">New registered user <small
                                class="float-right text-muted time">Just now</small> </a>
                        <a href="#" class="dropdown-item">New invoice received <small
                                class="float-right text-muted time">22 mins</small> </a>
                        <a href="#" class="dropdown-item">Server error report<small
                                class="float-right text-muted time">7 hrs</small> </a>
                        <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1
                                days</small> </a>
                        <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2
                                days</small> </a>
                    </div>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                        aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-big">
                        <div class="dropdown-header">
                            <strong>Quick Links</strong>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-files text-primary"></i>
                                <h5>New Task</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-check-box text-success"></i>
                                <h5>Assign Task</h5>
                            </a>
                        </div>
                        <div class="nav-grid">
                            <a href="#" class="nav-grid-item"><i class="ti-pencil-alt text-warning"></i>
                                <h5>Add Orders</h5>
                            </a>
                            <a href="#" class="nav-grid-item"><i class="ti-truck text-danger "></i>
                                <h5>New Orders</h5>
                            </a>
                        </div>
                    </div>
                </li>
                <ul class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar"  href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('assets/images/profile-avatar.png')}}" alt="avatar">
                    </a>
                    
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="mt-0 mb-0"> {{ Auth::user()->name }} </h5>
                                    <span> {{ Auth::user()->email }} </span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="text-secondary ti-reload"></i>{{__('mainpage.Activity')}}</a>
                        <a class="dropdown-item" href="#"><i class="text-success ti-email"></i>{{__('mainpage.Messages')}}</a>
                        <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>{{__('mainpage.Profile')}}</a>

                         {{-- <li class="dropdown-menu"> 
                            <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton"
                             data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                              @if (App::getLocale() == 'ar')
                              {{ LaravelLocalization::getCurrentLocaleName() }}
                              <img src="{{asset('assets/images/flags/EG.png')}}">
                              @else
                              {{ LaravelLocalization::getCurrentLocaleName() }}
                              <img src="{{asset('assets/images/flags/Us.png')}}">
                              @endif
                              </button>
                            <div class="dropdown-menu dropdown-content" aria-labelledby="dropdownMenuButton" >
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                @endforeach 
                            </div>
                        </li>   --}}
                        <li class="nav-item dropdown">
                            <a data-mdb-dropdown-init class="nav-link dropdown-toggle " href="#"
                              id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                              {{-- <img src="https:" class="rounded-circle" height="22" alt="Avatar"
                                loading="lazy" /> --}}
                                test
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item" href="#">My profile</a></li>
                              <li><a class="dropdown-item" href="#">Settings</a></li>
                              <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                          </li>
                        
                        <a class="dropdown-item" href="#"><i class="text-dark ti-layers-alt"></i>{{__('mainpage.Projects')}} <span
                                class="badge badge-info">6</span> </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="text-info ti-settings"></i>{{__('mainpage.Settings')}}</a>
                       
                   
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="text-danger ti-unlock"></i>{{__('mainpage.Logout')}}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                     
                    </div>
                </ul>
            </ul>
          
        </nav>

        <!--=================================
 header End-->
