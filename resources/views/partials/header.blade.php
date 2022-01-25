<header class="container my-4">
    <ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'home' ) ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'travel' ) ? 'active' : '' }}" href="{{ route('travel') }}">Travel!</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ (Route::currentRouteName() === 'contacts' ) ? 'active' : '' }}" href="{{ route('contacts') }}">Contacts</a>
    </li>
    </ul>
</header>