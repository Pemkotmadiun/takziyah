<!DOCTYPE html>
<html lang="en">

@include('admin.templates.partials.head')

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{ route('admin.dashboard') }}">
                    <span class="brand">Takziyah
                        <span class="brand-tip"> Bersama</span>
                    </span>
                    <span class="brand-mini">TB</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                @include('admin.templates.partials.toolbar')
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('admin.templates.partials.sidebar')
        <!-- END SIDEBAR-->
        
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            @include('admin.templates.partials.footer')
        </div>
    </div>
    
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    @include('admin.templates.partials.scripts')
</body>

</html>