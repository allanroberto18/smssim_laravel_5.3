<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>SMS</b>Sim</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SMS</b>Sim</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{--@include('admin.base.header_message')--}}
                {{--@include('admin.base.header_notifications')--}}
                {{--@include('admin.base.header_tasks')--}}
                @include('admin.base.header_user')
                {{--@include('admin.base.header_aside')--}}
            </ul>
        </div>
    </nav>
</header>