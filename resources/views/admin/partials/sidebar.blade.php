<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li>
                {{-- <a href="{{ route('herotext.index') }}"><img src="{{ asset('tadmin/assets/img/icons/dashboard.svg') }}" alt="img"><span>
                        Dashboard</span> </a> --}}
            </li>

            <li class="submenu">
                <a href="javascript:void(0);">  <i class="fa fa-home"></i> <span> HOME </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('popup.index') }}"
                            class="{{ Request::routeIs('popup.*') ? 'active' : '' }}">Banner</a>
                    </li>
                    <li>
                        <a href="{{ route('hero.index') }}"
                            class="{{ Request::routeIs('hero.*') ? 'active' : '' }}">Hero </a>
                    </li>
                    <li>
                        <a href="{{ route('herotext.index') }}"
                            class="{{ Request::routeIs('herotext.*') ? 'active' : '' }}">Hero Text </a>
                    </li>

                    <li>
                        <a href="{{ route('tentangsingkat.index') }}"
                            class="{{ Request::routeIs('tentangsingkat.*') ? 'active' : '' }}">About </a>
                    </li>
                    <li>
                        <a href="{{ route('benefit.index') }}"
                            class="{{ Request::routeIs('benefit.*') ? 'active' : '' }}">Benefit </a>
                    </li>
                    <li>
                        <a href="{{ route('benefitdetail.index') }}"
                            class="{{ Request::routeIs('benefitdetail.*') ? 'active' : '' }}">Benefit Detail </a>
                    </li>
                    <li>
                        <a href="{{ route('partner.index') }}"
                            class="{{ Request::routeIs('partner.*') ? 'active' : '' }}">Partner </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-money-bill"></i> <span> MAIN BUSINESS </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('kategoriproduk.index') }}"
                            class="{{ Request::routeIs('kategoriproduk.*') ? 'active' : '' }}">Produk </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-user-circle"></i> <span> About </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('about.index') }}"
                            class="{{ Request::routeIs('about.*') ? 'active' : '' }}">About </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-envelope"></i> <span> Contact </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('profil.index') }}"
                            class="{{ Request::routeIs('profil.*') ? 'active' : '' }}">Contact </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-user-friends"></i> <span> Member </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('member.index') }}"
                            class="{{ Request::routeIs('member.*') ? 'active' : '' }}">Member </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-user-tie"></i> <span> Career </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('career.index') }}"
                            class="{{ Request::routeIs('career.*') ? 'active' : '' }}">Career </a>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"><i class="fa fa-newspaper"></i> <span> Blog </span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li>
                        <a href="{{ route('blog.index') }}"
                            class="{{ Request::routeIs('blog.*') ? 'active' : '' }}">Blog </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
