<header class="header header-nav-menu header-nav-links">
    <div class="logo-container">
        <a href="{{ route('admin.dashboard') }}" class="logo">

            <img src="{{ asset('backend/img/logo-modern.png') }}" class="logo-image" width="90" height="24"
                alt="Porto Admin" />
        </a>
        <button class="btn header-btn-collapse-nav d-lg-none" data-bs-toggle="collapse" data-bs-target=".header-nav">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active"
            data-target=".search"><i class="bx bx-search"></i></a>
        <form action="pages-search-results.html" class="search search-style-1 nav-form d-none d-xl-inline-block">
            <div class="input-group">
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
            </div>
        </form>

        <span class="separator"></span>
        <a class="dropdown-language nav-link" href="#" role="button" id="dropdownLanguage"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="img/blank.gif" class="flag flag-us" alt="English" /> EN
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-us" alt="English" />
                English</a>
            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-es" alt="English" />
                Español</a>
            <a class="dropdown-item" href="#"><img src="img/blank.gif" class="flag flag-fr" alt="English" />
                Française</a>
        </div>

        <span class="separator"></span>

        <ul class="notifications">
            <li>
                <a href="#" class="dropdown-toggle notification-icon" data-bs-toggle="dropdown">
                    <i class="bx bx-bell"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="float-end badge badge-default">3</span>
                        Alerts
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-dislike bg-danger"></i>
                                    </div>
                                    <span class="title">Server is Down!</span>
                                    <span class="message">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-lock-alt bg-warning"></i>
                                    </div>
                                    <span class="title">User Locked</span>
                                    <span class="message">15 minutes ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-wifi bg-success"></i>
                                    </div>
                                    <span class="title">Connection Restaured</span>
                                    <span class="message">10/10/2023</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-end">
                            <a href="#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">

                <span class="profile-picture profile-picture-as-text">JD</span>
                <div class="profile-info profile-info-no-role" data-lock-name="John Doe"
                    data-lock-email="johndoe@okler.com">
                    <span class="name">Hi, <strong class="font-weight-semibold">John Doe</strong></span>
                </div>

                <i class="fas fa-chevron-down text-color-dark"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="bx bx-user"></i>
                            My Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                class="bx bx-lock-open-alt"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="bx bx-log-out"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
