<nav class="navbar navbar-expand-md navbar-light bg-light py-1">
    <div class="container-fluid">
        <button class="btn btn-default" id="btn-slider" type="button">
            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand me-auto text-danger" href="#">Dash<span class="text-warning">Board</span></a>
        <ul class="nav ms-auto">
            <li class="nav-item dropstart">
                <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown">
                    <p class="fw-bold m-0 lh-1">
                        {{ Auth::user()->name }}
                    </p>
                </a>

                <div class="dropdown-menu mt-2 pt-0" aria-labelledby="navbarDropdown">
                    <div class="d-flex p-3 border-bottom mb-2">

                        <div class="d-block">
                            <p class="fw-bold m-0 lh-1">
                                {{ Auth::user()->name }}
                            </p>
                            <small>{{ Auth::user()->numberPhone }}</small>
                        </div>
                    </div>
                    @if (Auth::user()->role == 'Seller')
                        <a class="dropdown-item" href="{{ route('Profile.Seller') }}">
                            <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('Detail.Order.Seller') }}">
                            <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Detail Order
                        </a>
                    @elseif (Auth::user()->role == 'Buyer')
                        <a class="dropdown-item" href="{{ route('Profile.Buyer') }}">
                            <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                        </a>
                        <a class="dropdown-item" href="{{ route('Detail.Order') }}">
                            <i class="fa-solid fa-circle-info me-3"></i>Detail Pesanan
                        </a>
                    @else
                        <a class="dropdown-item" href="{{ route('Profile.Admin') }}">
                            <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i>Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa-solid fa-cart-shopping me-3"></i>Cart
                        </a>
                    @endif
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="slider" id="sliders">
    <div class="slider-head">
        <div class="d-block pt-4 pb-3 px-3">
            <p class="fw-bold mb-3 lh-4 text-white">{{ Auth::user()->role }}</p>
            <p class="fw-bold mb-0 lh-1 text-white">{{ Auth::user()->name }}</p>
            <small class="text-white">{{ Auth::user()->numberPhone }}</small>
        </div>
    </div>
    <div class="slider-body px-1">
        <nav class="nav flex-column">
            <a class="nav-link px-3 active" href="{{ route('home') }}">
                <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
            </a>
            @if (Auth::user()->role == 'Seller')
                <a class="nav-link px-3" href="{{ route('Profile.Seller') }}">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                </a>
                <hr class="soft my-1 bg-white">

                <a class="nav-link px-3" href="{{ route('Category.Seller') }}">
                    <i class="fa fa-list fa-lg box-icon" aria-hidden="true"></i>Kategori
                </a>
                <a class="nav-link px-3" href="{{ route('Product.Seller') }}">
                    <i class="fa fa-box fa-lg box-icon" aria-hidden="true"></i>Produk
                </a>
            @elseif (Auth::user()->role == 'Buyer')
                <a class="nav-link px-3" href="{{ route('Profile.Buyer') }}">
                    <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3" href="{{ route('Category.Buyer') }}">
                    <i class="fa fa-list fa-lg box-icon" aria-hidden="true"></i>Kategori
                </a>
                <a class="nav-link px-3" href="{{ route('Product.Seller') }}">
                    <i class="fa fa-box fa-lg box-icon" aria-hidden="true"></i>Produk
                </a>
            @else
                <a class="nav-link px-3" href="{{ route('Seller.Admin') }}">
                    <i class="fa fa-users fa-lg box-icon" aria-hidden="true"></i>Penjual
                </a>
                <hr class="soft my-1 bg-white">
                <a class="nav-link px-3" href="{{ route('Category.Admin') }}">
                    <i class="fa fa-list fa-lg box-icon" aria-hidden="true"></i>Kategori
                </a>
                <a class="nav-link px-3" href="{{ route('Product.Admin') }}">
                    <i class="fa fa-box fa-lg box-icon" aria-hidden="true"></i>Produk
                </a>
            @endif

            <hr class="soft my-1 bg-white">
            <a class="nav-link px-3" href="{{ route('logout') }}"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    </div>
</div>
