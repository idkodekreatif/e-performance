<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('home') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @role('it|superuser')
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('raport.chart') }}">Laporan Dosen</a></li>
                </ul>
            </li>
            @endrole
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Insert Point</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('point-A') }}">Point A</a></li>
                            <li><a href="{{ route('point-B') }}">Point B</a></li>
                            <li><a href="{{ route('point-C') }}">Point C</a></li>
                            <li><a href="{{ route('point-D') }}">Point D</a></li>
                            <li><a href="{{ route('point-E') }}">Point E</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Update Point</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('edit.Point-A', Auth::user()->id) }}">Point A</a></li>
                            <li><a href="{{ route('edit.Point-B', Auth::user()->id) }}">Point B</a></li>
                            <li><a href="{{ route('edit.Point-C', Auth::user()->id) }}">Point C</a></li>
                            <li><a href="{{ route('edit.Point-D', Auth::user()->id) }}">Point D</a></li>
                            <li><a href="{{ route('edit.Point-E', Auth::user()->id) }}">Point E</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('raport', Auth::user()->id) }}">Raport</a></li>
                </ul>
            </li>

            @role('it|superuser')

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Point</a></li>
                    <li><a href="javascript:void()">Datatable</a></li>
                </ul>
            </li>
            @endrole

            @role('hrd|it|superuser')
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Maintenain</span>
                </a>
                <ul aria-expanded="false">
                    @role('it|superuser')
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                        <ul aria-expanded="false">
                            {{-- <li><a href="{{ route('usercontrol') }}">User Management</a></li> --}}
                            <li><a href="{{ route('users.index') }}">User Management</a></li>
                            <li><a href="{{ route('role.index') }}">User Role</a></li>
                            <li><a href="{{ route('permission.index') }}">User Permission</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void()">Activity Log</a></li>
                    @endrole
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Menu Control</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Menu.Controller') }}">Menu Edit Point</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            @endrole
        </ul>
        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">
                    <img src="{{ asset('Assets/images/undraw_profile.svg') }}" alt="">
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">{{ Auth::user()->name }}</h4>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <div class="profile-button">
                    <i></i>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2 progress-info">
                <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                <span class="fs-12">20/45</span>
            </div>
            <div class="progress default-progress">
                <div class="progress-bar bg-gradientf progress-animated" style="width: 50%; height:10px;"
                    role="progressbar">
                    <span class="sr-only">50% Complete</span>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p><strong>Institut Kesehatan & Bisnis Surabaya</strong> © {{ date('Y') }} All Rights Reserved</p>
            <p class="fs-12">Made with by IKBIS</p>
        </div>
    </div>
</div>
