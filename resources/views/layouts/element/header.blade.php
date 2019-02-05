<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('assets/images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ URL::to('/home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Master Data</h3>
                <li>
                    <a href="{{ URL::to('/siswa') }}"> <i class="menu-icon ti-email"></i>Siswa </a>
                </li>
                <li>
                    <a href="{{ URL::to('/wakil') }}"> <i class="menu-icon ti-email"></i>Wakil </a>
                </li>
                <li>
                    <a href="{{ URL::to('/ekskul') }}"> <i class="menu-icon ti-email"></i>Ekskul </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>