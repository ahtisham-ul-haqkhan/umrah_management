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
        {{-- <div class="app-sidebar__user">
            <div class="dropdown user-pro-body text-center">
                <div class="user-pic">
                    @if (Auth::check() && Auth::user()->image)
                    <img src="{{ asset('assets/images/users/' . Auth::user()->image) }}" alt="img" class="avatar-xxl rounded-circle mb-1">
                    @else
                    <img src="{{ asset('assets/images/png/support.png') }}" alt="user-img" class="avatar-xxl rounded-circle mb-1">
                    @endif
                </div>
                <div class="user-info">
                    <h5 class=" mb-2">{{ Auth::user()->name; }}</h5>
                    <span class="text-muted app-sidebar__user-name text-sm">Web Developer</span>
                </div>
            </div>
        </div> --}}

        <ul class="side-menu">
            <li class="side-item side-item-category mt-4">Dashboards</li>


            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-home sidemenu_icon"></i>
                    <span class="side-menu__label">HR <span class="nav-list">Dashboard</span></span>
                </a>

            </li>
         @can('check-permission')
         <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('user.show') }}">
                <i class="feather  feather-users sidemenu_icon"></i>
                <span class="side-menu__label">User <span class="nav-list"></span></span><i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.show') }}" class="slide-item">User Show</a></li>
                <li><a href="{{ route('role.assign') }}" class="slide-item">Assign Role</a></li>
            </ul>
        </li>
         @endcan
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-clipboard sidemenu_icon"></i>
                    <span class="side-menu__label">User<span class="nav-list">Role</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="{{ route('role.show') }}" class="slide-item">Role </a></li>
                </ul>
            </li>
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-clipboard sidemenu_icon"></i>
                    <span class="side-menu__label">Task<span class="nav-list">Dashboard</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                    <li><a href="task-profile.html" class="slide-item">User Profile</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-book sidemenu_icon"></i>
                    <span class="side-menu__label">Project <span class="nav-list">Dashboard</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Project Dashboard</a></li>
                    <li><a href="project-new.html" class="slide-item">New Project</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-user sidemenu_icon"></i>
                    <span class="side-menu__label">Client <span class="nav-list">Dashboard</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Client Dashboard</a></li>
                    <li><a href="client-profile.html" class="slide-item">User Profile</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-briefcase sidemenu_icon"></i>
                    <span class="side-menu__label">Job <span class="nav-list">Dashboard</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Job Dashboard</a></li>
                    <li><a href="index6.html" class="slide-item">Dashboard</a></li>
                </ul>
            </li> --}}
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-headphones sidemenu_icon"></i>
                    <span class="side-menu__label">Support<span class="nav-list"> System</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Support System</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Landing Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-knowledgeview.html">Knowledge View</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User Pages</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-userdash.html">Dashboard</a></li>
                            <li><a class="sub-slide-item" href="support-editprofile.html">Profile</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-ticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a href="#" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span class="sub-side-menu__label">Admin</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-admindash.html">Dashboard</a></li>
                            <li><a class="sub-slide-item" href="support-admineditprofile.html">Edit Profile</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-adminticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                                </ul>
                            </li>
                            <li><a class="sub-slide-item" href="support-admincustomer.html">Customers</a></li>
                            <li><a class="sub-slide-item" href="support-admincategories.html">Categories</a></li>
                            <li><a class="sub-slide-item" href="support-adminarticles.html">Articles</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a href="#" class="sub-side-menu__item" data-bs-toggle="sub-slide"><span class="sub-side-menu__label">Agent</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="support-agentdash.html">Dashboard</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Tickets</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="support-agentticketlist.html" class="sub-slide-item2">Ticket List</a></li>
                                    <li><a href="support-agentticketview.html" class="sub-slide-item2">View Ticket</a></li>
                                </ul>
                            </li>
                            <li><a class="sub-slide-item" href="support-agentassign.html">Assigned Categories</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-settings sidemenu_icon"></i>
                <span class="side-menu__label">Theme <span class="nav-list">settings</span></span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Theme-settings</a></li>
                    <li><a href="theme-settings-1.html" class="slide-item">Theme-style-1</style></a></li>
                    <li><a href="theme-settings-2.html" class="slide-item">Theme-style-2</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="chat-livechat.html">
                    <i class="feather feather-message-square sidemenu_icon"></i>
                    <span class="side-menu__label">Chat</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-airplay sidemenu_icon"></i>
                    <span class="side-menu__label">Admin</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Admin</a></li>
                    <li><a href="admin-role.html" class="slide-item">Role Access</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                    <i class="feather feather-slack sidemenu_icon"></i>
                    <span class="side-menu__label">Super Admin</span><i class="angle fa fa-angle-right"></i>
                </a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Super Admin</a></li>
                    <li><a href="index7.html" class="slide-item">Dashboard</a></li>
                </ul>
            </li> --}}
            {{-- <li class="side-item side-item-category">Apps</li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-server sidemenu_icon"></i>
                <span class="side-menu__label">Components</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Components</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Chat</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="chat.html">Chat</a></li>
                            <li><a class="sub-slide-item" href="chat2.html">Chat 02</a></li>
                            <li><a class="sub-slide-item" href="chat3.html">Chat 03</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Contact</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="contact-list.html">Contact list</a></li>
                            <li><a class="sub-slide-item" href="contact-list2.html">Contact list 02</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">File Manager</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="file-manager.html">File Manager</a></li>
                            <li><a class="sub-slide-item" href="file-manager-list.html">File Manager 02</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Todo List</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="todo-list.html">Todo List</a></li>
                            <li><a class="sub-slide-item" href="todo-list2.html">Todo List 02</a></li>
                            <li><a class="sub-slide-item" href="todo-list3.html">Todo List 03</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">User List</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="users-list-1.html">User List 01</a></li>
                            <li><a class="sub-slide-item" href="users-list-2.html">User List 02</a></li>
                            <li><a class="sub-slide-item" href="users-list-3.html">User List 03</a></li>
                            <li><a class="sub-slide-item" href="users-list-4.html">User List 04</a></li>
                        </ul>
                    </li>
                    <li><a href="calendar.html" class="slide-item"> Calendar</a></li>
                </ul>
            </li> --}}
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-layers sidemenu_icon"></i>
                <span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Elements</a></li>
                    <li><a href="accordion.html" class="slide-item"> Accordion</a></li>
                </ul>
            </li>
            <li class="side-item side-item-category">Forms & Charts</li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-file sidemenu_icon"></i>
                <span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Forms</a></li>
                    <li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-bar-chart sidemenu_icon"></i>
                <span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Charts</a></li>
                    <li><a href="chart-chartist.html" class="slide-item">Chartjs Charts</a></li>
                </ul>
            </li> --}}
            {{-- <li class="side-item side-item-category">Widgets & Maps </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-codepen sidemenu_icon"></i>
                <span class="side-menu__label">Widgets</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Widgets</a></li>
                    <li><a href="widgets-2.html" class="slide-item">Chart Widgets</a></li>
                </ul>
            </li> --}}
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-map-pin sidemenu_icon"></i>
                <span class="side-menu__label">Maps</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Maps</a></li>
                    <li><a href="maps.html" class="slide-item">Vector Maps</a></li>
                </ul>
            </li>
            <li class="side-item side-item-category">Icons & Tables</li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-layout sidemenu_icon"></i>
                <span class="side-menu__label">Tables</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Tables</a></li>
                    <li><a href="tables.html" class="slide-item">Default table</a></li>
                    <li><a href="datatable.html" class="slide-item">Data Table</a></li>
                </ul>
            </li> --}}
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-compass sidemenu_icon"></i>
                <span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Icons</a></li>
                    <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                </ul>
            </li> --}}
            {{-- <li class="side-item side-item-category">Pages</li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-copy sidemenu_icon"></i>
                <span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Pages</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Profile</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="profile-1.html">Profile 01</a></li>
                        </ul>
                    </li>
                    <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Email</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="email-compose.html">Email Compose</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Pricing</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="pricing.html">Pricing 01</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Invoice</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="invoice-edit.html">Edit Invoice</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="blog.html">Blog 01</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                    <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                    <li><a href="terms.html" class="slide-item"> Terms</a></li>
                    <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
                    <li><a href="search.html" class="slide-item"> Search</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-shopping-cart sidemenu_icon"></i>
                <span class="side-menu__label">E-commerce</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">E-commerce</a></li>
                    <li><a href="products.html" class="slide-item"> Products</a></li>
                    <li><a href="product-details.html" class="slide-item"> Products Details</a></li>
                    <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-aperture sidemenu_icon"></i>
                <span class="side-menu__label">Utils</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                  <li class="side-menu-label1"><a href="#">Utils</a></li>
                    <li><a href="element-colors.html" class="slide-item"> Colors</a></li>
                    <li><a href="element-width.html" class="slide-item"> Width</a></li>
                </ul>
            </li> --}}
            {{-- <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-lock sidemenu_icon"></i>
                <span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Account</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Login</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="login-1.html">Login 01</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Register</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="register-1.html">Register 01</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Forgot Password</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="forgot-password-1.html">Forgot Password 01</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Reset Password</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="reset-password-1.html">Reset Password 01</a></li>
                        </ul>
                    </li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Lock Screen</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="lockscreen-1.html">Lock Screen 01</a></li>
                        </ul>
                    </li>
                    <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
                    <li><a href="coming.html" class="slide-item"> Coming Soon</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-alert-octagon sidemenu_icon"></i>
                <span class="side-menu__label">Alert<span class="nav-list">  Messages</span></span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                     <li class="side-menu-label1"><a href="#">Alert Messages</a></li>
                    <li><a href="message-success.html" class="slide-item">Success Message</a></li>
                </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-alert-triangle sidemenu_icon"></i>
                <span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                     <li class="side-menu-label1"><a href="#">Error Pages</a></li>
                    <li><a href="400.html" class="slide-item"> 400</a></li>
                </ul>
            </li>
            <li class="slide ">
                <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="feather feather-sliders sidemenu_icon"></i>
                <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li class="side-menu-label1"><a href="#">Submenus</a></li>
                    <li><a href="#" class="slide-item">Level-1</a></li>
                    <li class="sub-slide">
                        <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
                        <ul class="sub-slide-menu">
                            <li><a class="sub-slide-item" href="#">Level-2.1</a></li>
                            <li class="sub-slide2">
                                <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span class="sub-side-menu__label2">Level-2.3</span><i class="sub-angle2 fa fa-angle-right"></i></a>
                                <ul class="sub-slide-menu2">
                                    <li><a href="#" class="sub-slide-item2">Level-2.3.1</a></li>
                                </ul>
                            </li>
                            <li><a class="sub-slide-item" href="#">Level-2.4</a></li>
                            <li><a class="sub-slide-item" href="#">Level-2.5</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</aside>
