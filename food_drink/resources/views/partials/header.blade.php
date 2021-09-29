<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><span
                class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                {{--                <li class="nav-item"><a href="{{ route('menu_food') }}" class="nav-link">Menu</a></li>--}}
                <li class="nav-item dropdown show">
                    <a class="nav-link dropdown-toggle"  id="dropdown-a"
                       data-toggle="dropdown" aria-expanded="true">Menu</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        @foreach($categories as $category)
                            <a class="dropdown-item" href="{{ route('menu.view',['slug'=>$category->slug,'id'=>$category->id]) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Login</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
