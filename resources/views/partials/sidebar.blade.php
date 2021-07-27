<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 46">
            <path fill="#fff" d="M60.3 27.8C60.3 30.9 57.8 33.5 54.6 33.5C51.5 33.5 49 30.9 49 27.8V2.3H38.5V27.8C38.5 36.7 45.7 44 54.6 44C63.5 44 70.8 36.7 70.8 27.8V2.3H60.3V27.8H60.3ZM0 44H30.4V33.5H10.5V28.4H30.4V17.9H10.5V12.8H30.4V2.3H0V44ZM113 15.4C113 8.2 107.2 2.3 100.1 2.3H79.5V44H89.9V28.4H94.6L103.6 44H115.7L105.9 27C110.1 24.9 113 20.5 113 15.4ZM100.1 17.9H89.9V12.8H100.1C101.5 12.8 102.6 14 102.6 15.4C102.6 16.8 101.5 17.9 100.1 17.9ZM226.5 44H256.9V33.5H237V28.4H256.9V17.9H237V12.8H256.9V2.3H226.5V44H226.5ZM279.3 2.3H266V44H276.5V43.9H279.3C290.7 43.9 300 34.6 300 23.1C300 11.6 290.7 2.3 279.3 2.3ZM279.3 33.5H276.5V12.8H279.3C285 12.8 289.6 17.4 289.6 23.1C289.6 28.8 285 33.5 279.3 33.5ZM196.8 21.5L186.7 2.3H176.3V44H186.7V24.7L196.8 44L206.8 24.8V44H217.3V2.3H206.8L196.8 21.5ZM144.8 0.5C132.5 0.5 122.5 10.5 122.5 23C122.5 35.4 132.5 45.4 144.8 45.4C157.1 45.4 167.1 35.4 167.1 23C167.1 10.5 157.1 0.5 144.8 0.5ZM157.7 27.1H148.9V35.9H140.7V27.1H132V18.8H140.7V10H148.9V18.8H157.7V27.1Z"></path>
        </svg>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.dashboard.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                </svg>
                    {{ __('Админпанель') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.reviews.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
                </svg>
                Отзывы
            </a>
        </li>
        @if(auth()->user()->is_admin)

            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="{{ route('admin.users.index') }}">
                    <svg class="c-sidebar-nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user-unfollow') }}"></use>
                    </svg>
                    {{ __('Пользователи') }}
                </a>
            </li>

        @endif
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('admin.review_groups.index') }}">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-address-book') }}"></use>
                </svg>
                {{ __('Категории') }}
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg>
                {{ __('Выйти') }}
            </a>
            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST"
                  class="d-none">
                @csrf
            </form>
        </li>
    </ul>
</div>
