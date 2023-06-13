@if ($configData['mainLayoutType'] === 'horizontal' && isset($configData['mainLayoutType']))
    <nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center {{ $configData['navbarColor'] }}"
        data-nav="brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span class="brand-logo">
                            <picture>
                                <source type="image/webp" srcset="http://127.0.0.1:8000/images/navbar/logo.webp">
                                <img class="hfe-site-logo-img elementor-animation- lazy loaded"
                                    style="border-radius: 10%;" src="http://127.0.0.1:8000/images/navbar/logo.svg"
                                    data-src="http://127.0.0.1:8000/images/navbar/logo.svg" alt=""
                                    data-was-processed="true">
                            </picture>
                        </span>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a>
                </li>
            </ul>
        </div>
    @else
        <nav
            class="header-navbar navbar navbar-expand-lg align-items-center {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }} {{ $configData['layoutWidth'] === 'boxed' && $configData['verticalMenuNavbarType'] === 'navbar-floating' ? 'container-xxl' : '' }}">
@endif
<div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                        data-feather="menu"></i></a></li>
        </ul>
        <ul class="nav navbar-nav">

        </ul>
    </div>
    <ul class="nav navbar-nav align-items-center ms-auto">
        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                    data-feather="{{ $configData['theme'] === 'dark' ? 'sun' : 'moon' }}"></i></a></li>
        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                    data-feather="search"></i></a>
            <div class="search-input">
                <div class="search-input-icon"><i data-feather="search"></i></div>
                <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                    data-search="search">
                <div class="search-input-close"><i data-feather="x"></i></div>
                <ul class="search-list search-list-main"></ul>
            </div>
        </li>
        <li class="nav-item dropdown dropdown-user">
            <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                data-bs-toggle="dropdown" aria-haspopup="true">
                <div class="user-nav d-sm-flex d-none">
                    <span class="user-name fw-bolder">
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            John Doe
                        @endif
                    </span>
                    <span class="user-status">
                        Admin
                    </span>
                </div>
                <span class="avatar">
                    <img class="round"
                        src="{{ Auth::user() ? Auth::user()->profile_photo_url : asset('images/portrait/small/avatar-s-11.jpg') }}"
                        alt="avatar" height="40" width="40">
                    <span class="avatar-status-online"></span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                <h6 class="dropdown-header">Manage Profile</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"
                    href="{{ Route::has('page-account-settings-account') ? route('page-account-settings-account') : 'javascript:void(0)' }}">
                    <i class="me-50" data-feather="user"></i> Profile
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="me-50" data-feather="power"></i> Logout
                </a>
                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
</div>
</nav>

{{-- if main search not found! --}}
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between">
        <a class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start">
                <span class="me-75" data-feather="alert-circle"></span>
                <span>No results found.</span>
            </div>
        </a>
    </li>
</ul>
{{-- Search Ends --}}
<!-- END: Header-->
