<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('template') }}/assets/images/faces/face1.jpg" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                    <span class="text-secondary text-small">
                        {{-- jika rolenya admin maka badge info --}}
                        @if (Auth::user()->role == 'admin')
                            <span class="badge bg-info text-white">Admin</span>
                        @else
                            <span class="badge bg-success">Staff</span>
                        @endif
                    </span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('pasien') }}">
                <span class="menu-title">Pasien</span>
                <i class="mdi mdi-account menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dokter') }}">
                <span class="menu-title">Dokter</span>
                <i class="mdi mdi-account-tie menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
