<header class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container"><a class="navbar-brand pe-sm-3" href="{{ route('home') }}">MASC 2606</a>
        <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode">
            <label class="form-check-label" for="theme-mode"><i class="ai-sun fs-lg"></i></label>
            <label class="form-check-label" for="theme-mode"><i class="ai-moon fs-lg"></i></label>
        </div>
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <nav class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
                <li class="nav-item"><a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('services')) ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
