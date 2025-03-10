<!-- ========== App Menu Start ========== -->
<div class="main-nav">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="index.html" class="logo-dark">
            <img src="{{asset('backend/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
            <img src="{{asset('backend/assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
        </a>

        <a href="index.html" class="logo-light">
            <img src="{{asset('backend/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
            <img src="{{asset('backend/assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
        </a>
    </div>

    <!-- Menu Toggle Button (sm-hover) -->
    <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
        <iconify-icon icon="solar:hamburger-menu-broken" class="button-sm-hover-icon"></iconify-icon>
    </button>

    <div class="scrollbar" data-simplebar>

        <ul class="navbar-nav" id="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:home-2-broken"></iconify-icon>
                                   </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('pricing-plans.index') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-round-call-broken"></iconify-icon>
                                   </span>
                    <span class="nav-text"> Pricing Plans </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:blog"></iconify-icon>
                                   </span>
                    <span class="nav-text"> Blogs </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ========== App Menu End ========== -->