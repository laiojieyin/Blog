<header class="l-header @if (request()->is('/')) l-header_overlay @endif">

    <div
        class="
    @if (request()->is('/')) l-navbar l-navbar_expand l-navbar_t-dark-trans js-navbar-sticky
    @else l-navbar l-navbar_expand l-navbar_t-light js-navbar-sticky @endif ">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="/" class="logo-brand">
                    <img class="retina"
                        @if (request()->is('/')) src="/assets/img/logo-dark.png"
                    @else src="/assets/img/logo.png" @endif
                        alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li class="@if (request()->is('/')) active @endif"><a href="/">Home</a>

                    </li>

                    {{-- <li class="@if (request()->is('about')) active @endif"><a href="/about">About</a>

                    </li> --}}

                    <li class="@if (request()->is('posts')) active @endif"><a href="/posts">Posts</a>

                    </li>

                    {{-- <li class="@if (request()->is('contact')) active @endif"><a href="/contact">Contact</a>

                    </li> --}}

                    @if (auth()->check())
                        <li class="@if (request()->is('admin')) active @endif"><a href="/admin">Admin</a>

                        </li>

                        {{-- <li class="@if (request()->is('categories')) active @endif"><a href="/categories">Categories</a>

                    </li> --}}

                        {{-- <li class="@if (request()->is('tags')) active @endif"><a href="/tags">Tags</a>

                    </li> --}}
                    @endif

                    @if (!auth()->check())
                        <li class=""><a href="/home">Login</a>

                        </li>
                    @else
                        <li class=""><a href="/home">Logout</a>

                        </li>
                    @endif


                </ul>
                <!--mega menu end-->

            </nav>
        </div>
    </div>

</header>
