
  <nav>
    <div class="nav-wrapper navbar-fixed white">
      <a href="#!" class="brand-logo grey-text text-darken-2">Logo</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger grey-text text-darken-2"><i class="material-icons">menu</i></a>
      <ul id="dropdown1" class="dropdown-content">
          <li><a href="{{ route('admin.home') }}">Главная страница</a></li>
          <li><a href="#!">Личная страница</a></li>
          <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"> Выход
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
          <!-- <li class="divider"></li> -->
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a class="grey-text text-darken-2" href="mobile.html">Mobile</a></li>
        @guest
            <li><a class="grey-text text-darken-2" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="grey-text text-darken-2" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li>
              <a href="#!" class="right dropdown-trigger" href="#!" data-target="dropdown1">
                  {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
              </a>
            </li>
        @endguest
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="mobile.html">Mobile</a></li>
    @guest
        <li><a  href="{{ route('login') }}">{{ __('Login') }}</a></li>
        <li><a  href="{{ route('register') }}">{{ __('Register') }}</a></li>
    @else
        <li>
          <a href="#!" class="dropdown-trigger" href="#!" data-target="dropdown1">
              {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
          </a>
        </li>
    @endguest
  </ul>
