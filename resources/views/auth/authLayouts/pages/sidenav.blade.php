
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
                    <li class="nav-label">User blog</li>
                    <li>
                    <a href="{{ route('blogs.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Blog</span>
                        </a>
                    </li>

                    <li>
                    <a href="{{ route('quicklink.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Quicklinks</span>
                        </a>
                    </li>

                    <li>
                    <a href="{{ route('gallery.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Gallery</span>
                        </a>
                    </li>

                    <li>
                    <a href="{{ route('governmentSites.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Official Govenment Site</span>
                        </a>
                    </li>

                    <li>
                    <a href="{{ route('important_links.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Important Links</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('etenders.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">E-Tenders notice</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('attendances.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Attedances</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('news.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">News</span>
                        </a>
                    </li>
                    </li>
                    <li>
                    <a href="{{ route('results.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Results</span>
                        </a>
                    </li>

                    <li>
                    <a href="{{ route('activities.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Recent Activities</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('teachingStaffs.index') }}" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Teaching Staff</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
