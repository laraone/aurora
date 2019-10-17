<header>
    <!-- Mountains image -->
    <div class="logo">
        @if(get_theme_setting('sidebar.logo.logotype') == 'text')
            <a class="logo-link" href="{{ url('/') }}">
                {{ get_website_setting('website.title') }}
            </a>
        @else
            <a class="logo-link" href="{{ url('/') }}">
                <img src="{{ get_theme_setting('sidebar.logo.logoImage') }}" class="img-responsive" alt="logo">
            </a>
        @endif
    </div>
    <!-- Slogan -->
    <h6 class="tagline">
        Aurora is a great blog & portfolio theme.
    </h6>

    <!-- Social Media icons -->
    <div class="social-media-wrapper">
        <div class="pr-4">
            <a href="#">
                <i class="fab fa-facebook-f social-icon"></i>
            </a>
        </div>
        <div class="pr-4">
            <a href="#">
                <i class="fab fa-twitter fa-lg social-icon"></i>
            </a>
        </div>
        <div class="pr-4">
            <a href="#">
                <i class="fab fa-instagram social-icon"></i>
            </a>
        </div>
        <div class="pr-4">
            <a href="#">
                <i class="fab fa-linkedin-in social-icon"></i>
            </a>
        </div>
        <div>
            <a href="#">
                <i class="fab fa-google-plus-g fa-lg social-icon"></i>
            </a>
        </div>
    </div>

    <div class="hamburger-button responsive-menu">
        <button class="hamburger {{ get_theme_setting('sidebar.hamburger.button.style') }}" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>

</header>