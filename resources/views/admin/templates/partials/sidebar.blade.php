        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <!-- <div class="admin-block d-flex">
                    <div>
                        <img src="{{ asset('assets/admin/assets/img/admin-avatar.png') }}" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div>
                </div> -->
                <ul class="side-menu metismenu">
                    </br>
                    <li>
                        <a class="active" href="{{ url('/admin') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">LAPORAN</li>
                    <li class="{{ Request::is('*laporan/keseluruhan*') ? 'active' : '' }}">
                        <a href="{{ route('admin.laporan.keseluruhan') }}"><i class="sidebar-item-icon fa fa-bookmark"></i>
                            <span class="nav-label">Keseluruhan</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('*laporan/baru*') ? 'active' : '' }}">
                        <a href="{{ route('admin.laporan.baru') }}"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Baru</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('*laporan/diterima*') ? 'active' : '' }}">
                        <a href="{{ route('admin.laporan.diterima') }}"><i class="sidebar-item-icon fa fa-table"></i>
                            <span class="nav-label">Diterima</span>
                        </a>
                    </li>
                    <li class="{{ Request::is('*laporan/ditolak*') ? 'active' : '' }}">
                        <a href="{{ route('admin.laporan.ditolak') }}"><i class="sidebar-item-icon fa fa-bar-chart"></i>
                            <span class="nav-label">Ditolak</span>
                        </a>
                    </li>
                    <li class="heading">PENGATURAN</li>
                    <li class="{{ Request::is('*/profil*') ? 'active' : '' }}">
                        <a href="{{ route('admin.profil.index') }}"><i class="sidebar-item-icon fa fa-gear"></i>
                            <span class="nav-label">Ubah Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="sidebar-item-icon fa fa-sign-out"></i>
                            <span class="nav-label">Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>