<!--
<header>
    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html"> <img src="../img/aperture.png" height="40" width="40"/></a>


            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/contest">Contest</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/profile">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="caption">
        <h1>snkrGllry</h1>
        <p id="littleHeading">The best on Feet on the Web!</p>
    </div>
</header>

-->

<header>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->


                <a class="navbar-brand" href="{{ url('/') }}"> <img src="../img/aperture.png" height="40"
                                                                    width="40"/></a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                        <li><a href={{url('/')}}>Home</a></li>
                        <li><a href={{url('/contest')}}>Contest</a></li>
                        <li><a href={{url('/news')}}>News</a></li>
                        <li><a href={{url('/about')}}>About</a></li>
                        <li><a href={{url('/login')}}>Login</a></li>
                        <li><a href={{url('/register')}}>Register</a></li>


                    @else
                        <li class="dropdown">

                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>   -->


                        <li><a href={{url('/')}}>Home</a></li>
                        <li><a href={{url('/contest')}}>Contest</a></li>
                        <li><a href={{url('/news')}}>News</a></li>
                        <li><a href={{url('/about')}}>About</a></li>
                        <li><a href="/user/{{Auth::user()->id}}">Profile</a></li>
                        <li>

                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div id="caption">
        <h1>snkrGllry</h1>
        <p id="littleHeading">The best on Feet on the Web!</p>
    </div>

</header>




