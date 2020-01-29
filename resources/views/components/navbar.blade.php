<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{request()->path()=="/"?"active":""}}">
                <a class="nav-link" href="/">Main<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{request()->path()=="catalog"?"active":""}}">
                <a class="nav-link" href="/catalog">Catalog</a>
            </li>
        </ul>

        @if(session()->get("auth") == true)

        <div class="form-inline my-2 my-lg-0 text-light">
            You login as: {{session()->get("login")}}
            <a href="/exit">
                <button class="btn btn-outline-danger my-2 my-sm-0 ml-3">Sign Out</button>
            </a>
        </div>

        @else

        <div class="form-inline my-2 my-lg-0">
            <a href="/auth">
                <button class="btn btn-outline-primary my-2 my-sm-0">Sign In</button>
            </a>
            <a href="/reg">
                <button class="btn btn-outline-success my-2 my-sm-0 ml-3">Sign Up</button>
            </a>
        </div>

        @endif
    </div>
</nav>