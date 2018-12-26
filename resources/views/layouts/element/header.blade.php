<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}">
                <b><img src="{{ asset('assets/images/logo.png') }}" alt="homepage" class="dark-logo" /></b>
                <span><img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" /></span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item"> 
                    <a class="nav-link nav-toggler hidden-md-up text-muted" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                    </a> 
                </li>
                <li class="nav-item m-l-10"> 
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted" href="javascript:void(0)"><i class="ti-menu"></i>
                    </a> 
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="profile-pic"></a>
                    <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                        <ul class="dropdown-user">
                            <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li> <a href="{{ url('/') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</a>
                </li>
                <li class="nav-label">Peserta Didik</li>
                <li> <a href="{{ url('/siswa') }}" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Input Data Peserta Didik</span></a>
                </li>
                <li> <a href="#" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Cetak Data Peserta Didik</span></a>
                </li>
            </ul>
        </nav>
    </div>
</div>