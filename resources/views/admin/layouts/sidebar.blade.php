<h3>Меню</h3>
<div class="side-container">
    <!-- This checkbox will give us the toggle behavior, it will be hidden, but functional -->
    <input id="toggle" type="checkbox">

    <!-- IMPORTANT: Any element that we want to modify when the checkbox state changes go here, being "sibling" of the checkbox element -->

    <!-- This label is tied to the checkbox, and it will contain the toggle "buttons" -->
    <label class="toggle-container" for="toggle">
        <!-- If menu is open, it will be the "X" icon, otherwise just a clickable area behind the hamburger menu icon -->
        <span class="button button-toggle"></span>
    </label>


    <!-- The nav menu -->
    <div class="nav">
        <a class="nav-item " href="{{ route('post.index') }}">Пост</a>
        <a class="nav-item" href="{{ route('category.index') }}">Категории</a>
        <a class="nav-item" href="{{ route('tag.index') }}">Теги</a>
        <a class="nav-item" href="#!">Пользователи</a>
    </div>

</div>