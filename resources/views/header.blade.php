<header class="header">
    <div class="header__title">
        Carlos Pineda
    </div>

    <nav class="header__menu">
        <ul class="header__menu__list">
            <li class="header__menu__list__option {{$activePage === 'home' ? "header__menu__list__option__select" : "" }}"><a href="">_hello</a></li>
            <li class="header__menu__list__option {{$activePage === 'about' ? "header__menu__list__option__select" : "" }}"><a href="">_about</a></li>
            <li class="header__menu__list__option {{$activePage === 'projects' ? "header__menu__list__option__select" : "" }}"><a href="">_projects</a></li>
            <li class="header__menu__list__option {{$activePage === 'blog' ? "header__menu__list__option__select" : "" }}"><a href="">_blog</a></li>
            <li class="header__menu__list__option"><a href=""></a></li>
            <li class="header__menu__list__option {{$activePage === 'contact_me' ? "header__menu__list__option__select" : "" }}"><a href="">_contact_me</a></li>
        </ul>
    </nav>
</header>
