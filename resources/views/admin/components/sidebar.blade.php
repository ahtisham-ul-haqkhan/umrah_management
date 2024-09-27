<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="index.html">
            <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
            <img src="../../assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
            <img src="../../assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
            <img src="../../assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
        </a>
    </div>
    <div class="app-sidebar3">
        <ul class="side-menu">
            <li class="side-item side-item-category mt-4">Modelss</li>
            {{-- @can('check-permission' , 'user_view') --}}

            <li class="slide">
               <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user.show') }}">
                   <i class="feather  feather-users sidemenu_icon"></i>
                   <span class="side-menu__label">User <span class="nav-list"></span></span><i class="angle fa fa-angle-right"></i>
               </a>
               <ul class="slide-menu">
                   <li><a href="{{ route('user.show') }}" class="slide-item">User Show</a></li>
               </ul>
           </li>
            {{-- @endcan --}}
            {{-- @can('check-permission', 'role_view') --}}

            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-clipboard sidemenu_icon"></i>
                    <span class="side-menu__label">User<span class="nav-list">Role</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('role.show') }}" class="slide-item">Role </a></li>
                </ul>
            </li>
            {{-- @endcan --}}
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-settings sidemenu_icon"></i>
                <span class="side-menu__label">Company <span class="nav-list">Details</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('company.show') }}" class="slide-item">View Compny</style></a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>
