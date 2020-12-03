<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header sticky-top d-flex bg-white align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="../../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
                <!-- Sidenav toggler -->
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../../pages/dashboards/dashboard.html" class="nav-link">
                            <i class="ni ni-tv-2"></i>
                            <span class="nav-link-text">Dashboard<span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-investment" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-investment">
                            <i class="ni ni-money-coins text-orange"></i>
                            <span class="nav-link-text">Investments</span>
                        </a>
                        <div class="collapse" id="navbar-investment">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{ route('unapproved') }}" class="nav-link">
                                        <i class="ni ni-paper-diploma"></i>
                                        <span class="nav-link-text">Unapproved</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('ongoing') }}" class="nav-link">
                                        <i class="ni ni-user-run"></i>
                                        <span class="nav-link-text">Ongoing</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('completed') }}" class="nav-link">
                                        <i class="ni ni-check-bold"></i>
                                        <span class="nav-link-text">Completed</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('new') }}" class="nav-link">
                                        <i class="ni ni-fat-add"></i>
                                        <span class="nav-link-text">Start New</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('abandoned') }}" class="nav-link">
                                        <i class="ni ni-ui-04"></i>
                                        <span class="nav-link-text">Abandoned</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span><i class="ni ni-settings-gear-65"></i></span>
                    User Settings
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-forms">
                            <i class="ni ni-single-copy-04 text-pink"></i>
                            <span class="nav-link-text">Profiles</span>
                        </a>
                        <div class="collapse" id="navbar-forms">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="{{route('profile')}}" class="nav-link">
                                        <i class="ni ni-settings"></i>
                                        <span class="nav-link-text">Settings</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="../../pages/forms/components.html" class="nav-link">
                                        <i class="ni ni-glasses-2"></i>
                                        <span>Profile Image</span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">Activities</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#navbar-messages" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="navbar-messages">
                            <i class="ni ni-single-copy-04 text-pink"></i>
                            <span class="nav-link-text">Messages</span>
                        </a>
                        <div class="collapse" id="navbar-messages">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item"><a href="{{ route('compose') }}" class="nav-link">
                                        <i class="ni ni-ui-04"></i>
                                        <span class="nav-link-text">Compose</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#navbar-inbox" class="nav-link" data-toggle="collapse" role="button"
                                        aria-expanded="true" aria-controls="navbar-inbox">
                                        <i class="ni ni-ui-04"></i>
                                        <span class="nav-link-text">Inbox</span>
                                    </a>
                                    <div class="collapse" id="navbar-inbox">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="{{ route('unread') }}" class="nav-link">
                                                    <i class="ni ni-ui-04"></i>
                                                    <span class="nav-link-text">Unread</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('read') }}" class="nav-link">
                                                    <i class="ni ni-ui-04"></i>
                                                    <span class="nav-link-text">Read</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('starred') }}" class="nav-link">
                                                    <i class="ni ni-ui-04"></i>
                                                    <span class="nav-link-text">Starred</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item"><a href="{{ route('outbox') }}" class="nav-link">Outbox</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
