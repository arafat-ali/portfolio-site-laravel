<header class="header">
    <a href="/" class="logo">Arafat.</a>

    <nav class="navbar">
        <a href="/" class="{{Request::path() == '/' ? 'active': ''}}">Home</a>
        <a href="/experience" class="{{Request::path() == 'experience' ? 'active': ''}}">Work Experience</a>
        <a href="/projects" class="{{Request::path() == 'projects' || Route::currentRouteName()=='project-by-exp' ? 'active': ''}}">Projects</a>
    </nav>
</header>