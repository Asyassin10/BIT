<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="https://images.unsplash.com/photo-1623230590824-f39e31a0a608?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        Bonjour {{ Auth::user()->name }}
                    </p>
                    <p class="designation">
                        Super administrateur
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fa fa-desktop menu-icon"></i>
                <span class="menu-title">Tableau de bord</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('allCategories') }}">
                <i class="fa fa-th-list  menu-icon"></i>
                <span class="menu-title">Les Categories</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ListArticles') }}">
                <i class="fa fa-font  menu-icon"></i>
                <span class="menu-title">Les Articles</span>
            </a>
        </li>
    </ul>
</nav>
