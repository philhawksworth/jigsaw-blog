<nav class="navbar is-primary has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img src="{{ $page->cdnPath('logo-160.png') }}">
                {{ $page->site->title }}
            </a>
            <div class="navbar-burger" :class="{ 'is-active': navbarActive }" @click="navbarActive = !navbarActive">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div><!-- .navbar-brand -->
        <div class="navbar-menu" :class="{ 'is-active': navbarActive }">
            <div class="navbar-end">
                <a href="/" class="navbar-item">
                    Home
                </a>
                <a href="/blog" class="navbar-item">
                    Blog
                </a>
                <a href="/about" class="navbar-item">
                    About
                </a>
                <a href="/projects" class="navbar-item">
                    Projects
                </a>
                <a href="/resume" class="navbar-item" target="_blank">
                    Resume
                </a>
                <a href="/contact" class="navbar-item">
                    Contact
                </a>
            </div>
        </div><!-- .navbar-menu -->
    </div><!-- .container -->
</nav>
