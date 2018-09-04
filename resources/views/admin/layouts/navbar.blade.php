<div class="navbar-fixed ">
    <nav>
        <div class="nav-wrapper teal darken-4">
            <a href="#" class="brand-logo right">{{ Auth::user()->name }}</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{ route ('admin.home') }} ">Home</a></li>
                <li><a href="{{ route  ('post.index') }}">Post</a></li>
                <li><a href="#">User</a></li>
            </ul>
        </div>
    </nav>
</div>