<nav class="navbar is-primary has-shadow">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img src="{{ $page->imageCdn('logo-160.png') }}">
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
                    <icon>home</icon> Home
                </a>
                <a href="/blog" class="navbar-item">
                    <icon>pencil</icon> Blog
                </a>
                <a href="/about" class="navbar-item">
                    <icon>user</icon> About
                </a>
                <a href="/projects" class="navbar-item">
                    <icon>code</icon> Projects
                </a>
                <a href="/resume" class="navbar-item">
                    <icon>file-text</icon> Resume
                </a>
                <a href="/contact" class="navbar-item">
                    <icon>envelope</icon> Contact
                </a>
            </div>
        </div><!-- .navbar-menu -->
    </div><!-- .container -->
</nav>
