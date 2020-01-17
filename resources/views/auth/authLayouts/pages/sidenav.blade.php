
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="{{ route('home') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->isAdmin())
                    <li class="nav-label">Admin blog</li>
                        <li>
                             <a href="{{ route('users.index') }}" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">Users</span>
                            </a>
                        </li>
                    @endif
                        {{-- for setting permissions --}}
                    @php
                        $auth= auth()->user()->auth;
                        $autharray = explode(",", $auth);
                    @endphp

                    <li class="nav-label">User blog</li>

                    @if (in_array("blog", $autharray))
                    <li>
                        <a href="{{ route('blogs.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Blog</span>
                        </a>
                    </li>
                    @endif

                    @if (in_array("quicklinks", $autharray))
                    <li>
                    <a href="{{ route('quicklink.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Quicklinks</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("gallery", $autharray))
                    <li>
                    <a href="{{ route('gallery.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Gallery</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("site", $autharray))
                    <li>
                    <a href="{{ route('governmentSites.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Official Govenment Site</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("links", $autharray))
                    <li>
                    <a href="{{ route('important_links.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Important Links</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("etenders", $autharray))
                        <li>
                        <a href="{{ route('etenders.index') }}" aria-expanded="false">
                                <i class="icon-badge menu-icon"></i><span class="nav-text">E-Tenders notice</span>
                            </a>
                        </li>
                    @endif

                    @if(in_array("attendances", $autharray))
                    <li>
                    <a href="{{ route('attendances.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Attedances</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("news", $autharray))
                    <li>
                    <a href="{{ route('news.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">News</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("results", $autharray))
                    </li>
                    <li>
                    <a href="{{ route('results.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Results</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("activities", $autharray))
                    <li>
                    <a href="{{ route('activities.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Recent Activities</span>
                        </a>
                    </li>
                    @endif

                    @if(in_array("teaching_staff", $autharray))
                    <li>
                    <a href="{{ route('teachingStaffs.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Teaching Staff</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
