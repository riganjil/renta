<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="nav_top">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">Renta.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryLink"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="categoryLink">
                        @foreach(\App\Category::getCategory() as $row)
                            <a class="dropdown-item"
                               href="{{url('category/'.$row->nama_kategori_seo)}}">{{$row->nama_kategori}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item {{ Request::path() == 'product' ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('product')}}">Products</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item {{ Request::path() == 'login' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('auth/logout')}}">Logout</a>
                    </li>
                @else
                    <li class="nav-item {{ Request::path() == 'login' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('auth/login')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>