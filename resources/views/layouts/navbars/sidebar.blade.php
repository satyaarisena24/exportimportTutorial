<div class="sidebar" data-color="azure" data-background-color="white"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
    <a href="{{ route('home')}}" class="simple-text logo-normal">
            {{ __('E-Filling') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            {{-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                <p>{{ __('Laravel Examples') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="laravelExample">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('profile.edit') }}">
                            <span class="sidebar-mini"> UP </span>
                            <span class="sidebar-normal">{{ __('User profile') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <span class="sidebar-mini"> UM </span>
                            <span class="sidebar-normal"> {{ __('User Management') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
            </li> --}}
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="material-icons">person</i>
                    <p>{{ __('User Management') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'mahasiswa' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('mahasiswa.index') }}">
                    <i class="material-icons">group</i>
                    <p>{{ __('Mahasiswa') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">group</i>
                    <p>{{ __('Dosen') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">group</i>
                    <p>{{ __('Tendik') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Dokumen') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">verified_user</i>
                    <p>{{ __('Verifikasi') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">archive</i>
                    <p>{{ __('Arsip') }}</p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="material-icons">history</i>
                    <p>{{ __('Logs') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>
