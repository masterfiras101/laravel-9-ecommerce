
<div class="main-navbar shadow-sm sticky-top" >
    <div class="top-navbar">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                    <h5 class="brand-name">Store</h5>

                </div>
                {{-- <div class="col-md-5  my-auto">
                    <form  role="search">
                        <div class="input-group">
                            <input type="search" id="s" placeholder="ابحث في المتجر" class="form-control s">
                            <button class="btn btn-white" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div> --}}

                <div class="col-md-10 my-auto">
                    <ul class="nav justify-content-end">

                        <li class="nav-item">
                            <a  class="nav-link" href="{{ url('Cart')}}">
                                <i class="fa fa-shopping-cart"></i> Cart(<livewire:frontend.cart.cart-count />)
                            </a>
                        </li>


                        <li class="nav-item">
                            <a  class="nav-link" href="{{ url('wishlist')}}">
                                <i class="fa fa-heart"></i> Favorite(<livewire:frontend.wishlist-count />)
                            </a>
                        </li>
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fa fa-sign-in"></i> {{ __('Login') }}
                                </a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Signup') }}</a>
                            </li>
                        @endif
                        @else

                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user" ></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropDown-item" href="#"><i class="fa fa-user"></i>Profile</a></li>
                                <li><a  class="dropDown-item" href="#"><i class="fa fa-list"></i>Favorite</a></li>
                                <li><a  class="dropDown-item" href="#"><i class="fa fa-heart"></i>Wishlist</a></li>
                                {{-- <li><a  class="dropDown-item" href="#"><i class="mdi mdi-login text-primary"></i>{{ __('Logout') }}</a></li> --}}
                                <li class="nav-item">
                                    {{-- {{Auth::user()->role_as == '0'? <a class="nav-link"  href="{{ url('/admin/dashboard')}}" >Dashboard</a>:
                                    'f'}} --}}
                                     <a class="nav-link"  href="{{ url('/admin/dashboard')}}" >
                                     {{Auth::user()->role_as == 0 ? 'Dashboard': 'Help'}}</a>
                                    {{-- <a class="nav-link"  href="{{ url('/')}}" >Help</a> --}}

                                </li>
                                <li>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </li>
                            </ul>
                        </li>
                        @endguest


                    </ul>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg" >
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a   class="navbar-brand d-block d-sm-block d-md-none d-lg-none" href="#" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                Store
            </a>
            <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <ul class="navbar-nav my-aut mb-2 mb-lg-0 ">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">Help</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/new-arrivals')}}">New Arrivals</a>
                    </li> --}}


                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">الالكترونيات</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">الازياء</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/')}}">الاكسسوارات</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                    <button  id="google_translate_element">تغير اللغة</button>

                    </li> --}}



                </ul>

            </div>

        </div>
    </nav>

</div>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?
 cb=googleTranlateElementInt"></script>

 <script type="text/javascript" src="">

    function googleTranslateElementInt(){
        new google.translate.TranslateElement({pageLanguage :'en'},'google_translate_element');
    }

</script>
