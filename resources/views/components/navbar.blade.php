<nav class="navbar navbar-expand-lg backgrounddark shadow sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">
            <img src="{{asset('logo.png')}}" alt="Logo" width="70" height="70" class="d-inline-block align-text-top me-5 ms-3">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('article.index')}}" class="nav-link" aria-current="page">{{__("ui.allArticles")}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__("ui.category")}}
                    </a>
                    <ul class="dropdown-menu backgrounddark">
                        @foreach($categories as $category)
                        <li class="backgrounddark text-center">
                            <a class="textred text-center" href="{{route('byCategory', ['category' => $category])}}" class="dropdown-item text-capitalize">{{__("ui.$category->name")}}</a>
                        </li>
                        @if(!$loop->last)
                        <hr class="dropdown-divider">
                        @endif
                        @endforeach
                    </ul>
                </li>
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a href="{{route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">
                        {{__("ui.revisor")}}
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger @if(!\App\Models\Article::toBeRevisedCount()) d-none @endif">
                            {{\App\Models\Article::toBeRevisedCount()}}
                        </span>
                    </a>
                </li>
                @endif
                <li class="nav-item dropdown backgrounddark">
                    <a href="" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__("ui.hello")}}, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu backgrounddark">
                        <li><a href="{{route('create.article')}}" class="dropdown-item textred">{{__("ui.publish")}}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-danger" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{__("ui.logout")}}</a>
                        </li>
                        <form action="{{route('logout')}}" method="POST" class="d-none textred" id="form-logout">@csrf</form>
                    </ul>
                </li>
                @else
                <li class="nav-item dropdown backgrounddark">
                    <a href="#" class="nav-link dropdown-toggle textred" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__("ui.hello")}}, {{__("ui.user")}}!
                    </a>
                    <ul class="dropdown-menu backgrounddark">
                        <li><a href="{{route('login')}}" class="dropdown-item textred">{{__("ui.login")}}</a></li>
                        <hr class="dropdown-divider">
                        <li><a href="{{route('register')}}" class="dropdown-item textred">{{__("ui.register")}}</a></li>
                        <hr class="dropdown-divider">
                        <li class="d-flex justify-content-center">
                            <a href="{{route('facebook.redirect')}}" class="me-3">
                                <i class="fa-brands fa-facebook fa-2x" style="color: #0008ff;"></i>
                            </a>
                            <a href="{{route('google.redirect')}}" class="ms-3">
                                <i class="fa-brands fa-google-plus-g fa-2x" style="color: #EC4E1D;"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                @endauth
            </div>
        </div>
        <form class="d-flex mx-auto" role="search" action="{{route('article.search')}}" method="GET">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="{{__("ui.search")}}..." name="query">
                <button class="input-group-text btn btn-success me-5" type="submit" id="basic-addon2">{{__("ui.search")}}</button>
            </div>
        </form>
        <div class="col-12 col-md-1">
            <x-_locale lang="it" />
            <x-_locale lang="en" />
            <x-_locale lang="es" />
        </div>
    </nav>