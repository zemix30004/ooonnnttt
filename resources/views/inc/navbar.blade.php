    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#">{{ config('app.name', 'LSAPP') }}</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/services">Services</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/posts">Blog</a>
                    </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link" aria-current="page" href="/posts/create">Create Post</a></li>
                    </ul>
            </div>
        </div>
    </nav>
