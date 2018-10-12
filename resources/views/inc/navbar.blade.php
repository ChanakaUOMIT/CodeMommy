<nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'CodeMommy') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
               
                <ul class="navbar-nav mr-auto">
                  <li><a class="nav-link" href="/">Home</a><li>
                  <li><a class="nav-link"  href="/about">About</a></li>
                  <li><a class="nav-link" href="/services">Services</a></li>
                  <li><a class="nav-link" href="/posts">Blog</a></li>
                  
                </ul>

                <ul class="navbar-nav  navbar-right">
                    <li><a class="nav-link" href="/posts/create">Create Post</a></li>
                </ul>
               
            </div>
        </div>
    </nav>