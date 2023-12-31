<!-- Main navbar -->
<style>
    img.logo {
        width: 50%;
        height: 150px;

        margin-right: 150px;
    }

    a.navbar-brand.logo {
        color: white;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 20px;
    }
</style>
<div class="navbar navbar-default header-highlight">
    <div class="navbar-header">
        <a class="navbar-brand logo" href="/admin"> StayNestRentals
        </a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="uploads/avatars/{{ Auth::user()->avatar }}" alt="">
                    <span>{{ Auth::user()->name }}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="user/login"><i class="icon-switch2"></i> Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
