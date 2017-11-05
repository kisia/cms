<nav class="nav has-shadow">
    <div class="container">
        <div class="nav-left">
            <a href="{!! url('/') !!}" class="nav-item">
                <img src="{{ asset('public/images/logo.png') }}" alt="Limitless">
            </a>
            <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Discuss</a>
            <a href="#" class="nav-item is-tab is-hidden-mobile">Share</a>
        </div>

        <div class="nav-right" style="overflow:visible;">
            @if (Auth::guest())
                <a href="{{ route('login') }}" class="nav-item is-tab">Login</a>
                <a href="{{ route('register') }}" class="nav-item is-tab">Join the Community</a>
            @else
                <button class="dropdown is-aligned-right nav-item is-tab">
                    Hey {!! Auth::user()->name !!} <span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span> Profile</a></li>
                        <li><a href="#"><span class="icon"><i class="fa fa-fw fa-bell"></i></span> Notification</a></li>
                        <li><a href="{!! route('manage.dashboard')  !!}"><span class="icon"><i class="fa fa-fw fa-cog"></i></span> Manage</a></li>
                        <li class="seperator"></li>
                        <li><a href="{!! route('logout') !!}"><span class="icon"><i class="fa fa-fw fa-sign-out"></i></span> Logout</a></li>
                    </ul>
                </button>
            @endif
        </div>
    </div>
</nav>
