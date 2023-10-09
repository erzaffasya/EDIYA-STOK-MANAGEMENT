<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">

        <ul class="menu-inner">
            <!-- Dashboards -->
            <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link ">
                    <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <li class="menu-item ">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                    <div data-i18n="Landingpage">Landingpage</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="{{ route('hero.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-format-title"></i>
                            <div data-i18n="Hero">Hero</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('about.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account"></i>
                            <div data-i18n="Tentang Kami">Tentang Kami</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('layanan.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-help-rhombus"></i>
                            <div data-i18n="Layanan Dan Dukungan">Layanan Dan Dukungan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('benefit.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-gift"></i>
                            <div data-i18n="Benefit">Benefit</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('videopromo.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-video"></i>
                            <div data-i18n="Video Promo">Video Promo</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('testimonial.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-comment-account"></i>
                            <div data-i18n="Testimoni">Testimoni</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('pilihanprogram.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-check-circle"></i>
                            <div data-i18n="Pilihan Program">Pilihan Program</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blog.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-newspaper"></i>
                            <div data-i18n="Blog">Blog</div>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Charts & Maps -->
            <li class="menu-item {{ Request::routeIs('admin.chart') ? 'active' : '' }}">
                <a href="{{ route('admin.chart') }}" class="menu-link">
                    <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                    <div data-i18n="Charts">Charts</div>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- / Menu -->
