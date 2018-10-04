<div class="sidebar-wrapper">
    <div class="logo">
        <a href="#" class="simple-text">
            ENDASH
        </a>
    </div>

    <ul class="nav">
        <li class="{{ Request::is('/') ? 'active'  :  ''}}">
            <a href="{{ url('/') }}">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="{{ Request::is('players/*') ? 'active'  :  ''}}">
            <a href="{{ url('/players') }}">
                <i class="ti-user"></i>
                <p>Players Profile</p>
            </a>
        </li>
        <!-- <li class="{{ Request::is('articles') ? 'active'  :  ''}}">
            <a href="{{ url('/articles') }}">
                <i class="ti-notepad"></i>
                <p>Write Articles</p>
            </a>
        </li> -->
        <li class="{{ Request::is('matches/*') ? 'active'  :  ''}}">
            <a href="{{ url('/matches')}}">
                <i class="ti-view-list-alt"></i>
                <p>Match Fixing</p>
            </a>
        </li>
         <li class="{{ Request::is('media/*') ? 'active'  :  ''}}">
            <a href="{{ url('/media')}}">
                <i class="ti-gallery"></i>
                <p>Gallery</p>
            </a>
        </li>
        <!-- <li class="{{ Request::is('notifications') ? 'active'  :  ''}}">
            <a href="#">
                <i class="ti-bell"></i>
                <p>Notifications</p>
            </a>
        </li> -->
    </ul>
</div>