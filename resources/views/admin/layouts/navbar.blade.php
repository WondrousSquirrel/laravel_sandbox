<div class="navbar-fixed ">
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
    <nav>
        <div class="nav-wrapper teal darken-4">
            <a href="#!" class="brand-logo right dropdown-trigger" href="#!" data-target="dropdown1">
                {{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/">На сайт</a></li>
            </ul>
        </div>
    </nav>
</div>
