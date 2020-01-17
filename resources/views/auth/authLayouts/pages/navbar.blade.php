<div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            {{ Auth::user()->name}}<img src="{{ Gravatar::src(Auth::user()->email) }}" height="40" width="40" alt=""> <span class="activity active"></span>
                            </div>
                            <div class="drop-down dropdown-profile dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                    <li><a href="{{ route('auth.edit-profile') }}"><img src="{{ Gravatar::src(Auth::user()->email) }}" height="20" width="20" alt=""> <span>{{ __('My profile') }}</span></a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i> <span>{{ __('Logout') }}</span></a></li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
