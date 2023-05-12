
<div class="first_header">
    <h5>Delivery All Over Lebanon|Pay Cash on delivery</h5>

</div>

<header class="header" id="header">
    <br><br>
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <i class="bx bxs-watch nav__logo-icon"></i> WebName
      </a>

      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">

            <a href="#home" class="nav__link active-link">Home</a>
          </li>
          <li class="nav__item">
            <a href="#featured" class="nav__link">Featured</a>
          </li>
          <li class="nav__item">
            <a href="#products" class="nav__link">Products</a>
          </li>
          <li class="nav__item">
            <a href="#new" class="nav__link">New</a>
          </li>
        </ul>

        <div class="nav__close" id="nav-close">
          <i class="bx bx-x"></i>
        </div>
      </div>

      <div class="nav__btns">
        <!-- Theme change button -->
        <div class="circle-wrapper">
            <div class="circle">
                <div class="circle-image">
                    <img src="{{ asset('admin/assets/images/profile/user-1.jpg') }}" alt="Profile Picture" class="profile-picture">
                </div>
                <div class="dropdown-wrapper">
                    <div class="dropdown">
                        @if (Auth::check())
                            <a href="{{ route('dashboard') }}">My Account</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}">Log In</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>



        <i class="bx bx-moon change-theme" id="theme-button"></i>

        <div class="nav__shop" id="cart-shop">
          <i class="bx bx-shopping-bag"></i>
        </div>

        <div class="nav__toggle" id="nav-toggle" style="margin-right:30px ">
          <i class="bx bx-grid-alt"></i>
        </div>
      </div>

    </nav>
  </header>
