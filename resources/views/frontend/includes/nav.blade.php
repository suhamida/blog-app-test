<div class="container">
    <div class="menu-bg-wrap">
        <div class="site-navigation">
            <div class="row g-0 align-items-center">
                <div class="col-2">
                    <a href="{{route('home')}}" class="logo m-0 float-start">Blogy<span class="text-primary">.</span></a>
                </div>
                <div class="col-8 text-center">
                    <form action="#" class="search-form d-inline-block d-lg-none">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bi-search"></span>
                    </form>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                        <li class="active"><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('blogs')}}">Blogs</a></li>
                        <li><a href="{{route('category')}}">Category</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        <li><a href="{{route('register')}}">Register</a></li>
                        <li><a href="{{route('login')}}">Login</a></li>
                    </ul>
                </div>
                <div class="col-2 text-end">
                    <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                        <span></span>
                    </a>
                    <form action="#" class="search-form d-none d-lg-inline-block">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bi-search"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
