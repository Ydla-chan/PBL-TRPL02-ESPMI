<div class="page-wrapper">
    <nav class="navbar">
        <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
            <form class="search-form">
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                </div>
            </form>

            <ul class="navbar-nav">
                <li class="nav-item dropdown nav-profile">
                    <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@if(Auth::user()->urlProfile)
                        <img src="{{ asset('storage/avatars/' . Auth::user()->urlProfile) }}" alt="Profile Photo" class="img-fluid" style="max-width: 150px;">
                    @else
                        @php
                            $initials = '';
                            $names = explode(' ', Auth::user()->nama);
                            foreach ($names as $name) {
                                if (!empty($name)) {
                                    $initials .= strtoupper($name[0]);
                                }
                            }
                            // Jika $initials masih kosong, beri tanda 'N/A'
                            if (empty($initials)) {
                                $initials = 'N/A';
                            }
                        @endphp
                            <div alt="Profile Photo" class="img-fluid"> {{ $initials }}</div>
                            
                   
                    @endif
                       
                    </a>
                    <div class="dropdown-menu" aria-labelledby="profileDropdown">
                        <div class="dropdown-header d-flex flex-column align-items-center">
                            <div class="figure mb-3">
                                @if(Auth::user()->urlProfile)
                                    <img src="{{ asset('storage/avatars/' . Auth::user()->urlProfile) }}" alt="{{ Auth::user()->name }} Profile" class="img-fluid">
                                @else
                                    @php
                                        $initials = '';
                                        $names = explode(' ', Auth::user()->nama);
                                        foreach ($names as $name) {
                                            if (!empty($name)) {
                                                $initials .= strtoupper($name[0]);
                                            }
                                        }
                                        // Jika $initials masih kosong, beri tanda 'N/A'
                                        if (empty($initials)) {
                                            $initials = 'N/A';
                                        }
                                    @endphp
                                    <div alt="{{ Auth::user()->name }} w-px-40 h-auto rounded-circle" class="w-px-40 h-auto rounded-circle">
                                        {{ $initials }}
                                    </div>
                                @endif
                            </div>
                            
                            <div class="info text-center">
                                <p class="name font-weight-bold mb-0"> {{ Session::get('Name') }}</p>

                                <p>{{ Auth::user()->role }}</p>
                            </div>
                        </div>
                        <div class="dropdown-body">
                            <ul class="profile-nav p-0 pt-3">
                                <li class="nav-item">
                                    <a href="/profile" class="nav-link">
                                        <i data-feather="edit-3"></i>
                                        <span>Perbarui Profil</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/logout" class="nav-link">
                                        <i data-feather="log-out"></i>
                                        <span>Keluar Sistem</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
