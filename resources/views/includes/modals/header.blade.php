<header class="header navbar navbar-expand-sm">

            <a href="{{route('investissement.index')}}" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="{{route('investissement.index')}}">
                    <img alt="logo" src="{{asset('cirm/admin/invest/assets/img/logo-sm.png')}}">
                    <span class="navbar-brand-name">Wassit</span>
                </a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
                <li class="nav-item align-self-center search-animated">
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Rechercher...">
                        </div>
                    </form>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </li>
            </ul>
            <ul class="navbar-item flex-row nav-dropdowns">
                @if(!Auth::guard('admin')->check())
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">

                        <a class=" btn"  href="{{route('investissement.create.ar')}}"    aria-expanded="false">
                            <span>Ar</span>
                        </a>
                        <a class=" btn"  href="{{route('investissement.create')}}"    aria-expanded="false">
                            <span>Fr</span>
                        </a>

                    </div>
                </li>
                @endif

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="{{route('investissement.index')}}" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-body align-self-center">
                                <h6>Wassit</h6>
                            </div>
                            <img src="{{asset('cirm/admin/invest/assets/img/logo-sm.png')}}" class="img-fluid" alt="admin-profile">
                            <span class="badge badge-success"></span>
                        </div>
                    </a>
                    @auth('admin')
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">

                        <div class="dropdown-item">
                            <a href="#"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                href="{{ route('logout') }}" 

                            >
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>                            
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg><span>Déconnexion</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </li>
            </ul>
        </header>