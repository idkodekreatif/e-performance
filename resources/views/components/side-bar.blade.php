<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('home') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @role('it|superuser|manajer|hrd')
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('raport.chart') }}">Laporan Dosen</a></li>
                </ul>
            </li>
            @endrole

            @role('it|superuser|dosen|tendik')
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Forms</span>
                </a>
                @role('it|superuser|dosen')
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ITIKAD</a>
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
                </ul>
                @endrole

                @role('it|superuser|tendik')
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ITISAR</a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('warek2.ka.bau') }}">Ka. Bau</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. UPT</a>
                                <ul aria-expanded="false">
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Unit Pemasaran</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('ka.upt.ka.unit.pemasaran') }}">Ka. Unit Pemasaran</a></li>
                                            <li><a href="{{ route('ka.StaffPemasaran') }}">Staff Pemasaran</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('ka.upt.ka.unit.perpustakaan') }}">Koordinator Perpustakaan</a></li>
                                    <li><a href="{{ route('ka.upt.ka.unit.laboran') }}">Koordinator Laboratorium</a></li>
                                    <li><a href="{{ route('ka.upt.ka.unit.it')}}">Ka. Unit IT</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('ka.baak') }}" aria-expanded="false">Ka. BAAK</a>
                                    <li><a href="javascript:void()">BAAK Keperawatan</a></li>
                                    <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KEUANGAN</a>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a> --}}
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('StaffKeuangan') }}" aria-expanded="false">Staff Keuangan</a>
                                    {{-- <li><a href="javascript:void()">BAAK Keperawatan</a></li>
                                    <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a> --}}
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('Lpm') }}" aria-expanded="false">Staff LPM</a>
                                    {{-- <li><a href="javascript:void()">BAAK Keperawatan</a></li>
                                    <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Lem. RISBANG</a>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a> --}}
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('KasubRisbang') }}" aria-expanded="false">Ka. Sub. Lem. Penel & Pengmas</a>
                                    {{-- <li><a href="javascript:void()">BAAK Keperawatan</a></li>
                                    <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KAPRODI</a>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a> --}}
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('sekKaprodi') }}" aria-expanded="false">Sek Ka. Prodi</a>
                                    {{-- <li><a href="javascript:void()">BAAK Keperawatan</a></li>
                                    <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAU</a>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a> --}}
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('kasubBiroKepegawaian') }}" aria-expanded="false">Ka. Sub Biro Kepegawaian</a>
                                    <li><a href="{{ route('KasubBiroKeuangan') }}">Ka. Sub. Biro Keuangan & Akuntant</a></li>
                                    {{-- <li><a href="javascript:void()">BAAK Kebidanan</a></li>
                                    <li><a href="javascript:void()">BAAK Ilmu Gizi</a></li>
                                    <li><a href="javascript:void()">BAAK Akuntansi</a></li>
                                    <li><a href="javascript:void()">BAAK Manajement</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endrole
            </li>
            @endrole

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
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('users.index') }}">User Management</a></li>
                            <li><a href="{{ route('role.index') }}">User Role</a></li>
                            <li><a href="{{ route('permission.index') }}">User Permission</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('logactivity') }}">Activity Log</a></li>
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
                    @if (Auth::user()->avatar)
                    <img src="{{ asset('/storage/photos/'. Auth::user()->avatar) }}" alt="">
                    @else
                    <img src="{{ asset('Assets/images/profile/profile.png') }}" width="56" alt="">
                    @endif
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
            <p><strong>Institut Kesehatan dan Bisnis Surabaya</strong> © {{ date('Y') }} All Rights Reserved</p>
            <p class="fs-12">Made with by IKBIS</p>
        </div>
    </div>
</div>
