<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            {{-- =================================== --}}
            {{-- Dashboard --}}
            {{-- =================================== --}}
            <li>
                <a href="{{ route('home') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            {{-- =================================== --}}
            {{-- Charts --}}
            {{-- =================================== --}}
            @role('it|superuser|manajer')
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('raport.chart') }}">Laporan ITIKAD</a></li>
                    @role('it|superuser')
                    <li><a href="{{ route('preview.point', Auth::user()->id) }}">Dev Laporan IKTISAR Raport</a></li>
                    <li><a href="{{ route('raport.chart.itisar') }}">Dev Laporan IKTISAR Chart</a></li>
                    @endrole
                </ul>
            </li>
            @endrole

            {{-- =================================== --}}
            {{-- Apps Menu --}}
            {{-- =================================== --}}
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-clone"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">

                    {{-- ITIKAD App --}}
                    @php
                    $user = auth()->user();

                    // ambil semua jabstruk user
                    $jabstrukNames = $user->jabstruk()->pluck('name')->toArray();

                    // daftar jabstruk yang boleh akses ITIKAD
                    $allowedJabstruk = [
                    'Kepala Subbagian Protokoler, Umum, dan Kepegawaian',
                    'Kepala Biro Administrasi Umum'
                    ];

                    $hasAllowedJabstruk = array_intersect($jabstrukNames, $allowedJabstruk);
                    @endphp

                    {{-- ===================================================================
                    TAMPILKAN MENU ITIKAD JIKA:
                    1. user punya jabatan fungsional (jabfung)
                    2. atau user punya salah satu jabstruk yang diizinkan
                    ====================================================================== --}}
                    @if ($user->jabfung()->exists() || !empty($hasAllowedJabstruk))
                    <li>
                        <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">ITIKAD</a>
                        <ul aria-expanded="false">

                            {{-- ===============================
                            1. AKSES UNTUK JABATAN FUNGSIONAL
                            =============================== --}}
                            @if ($user->jabfung()->exists())
                            <li><a href="{{ route('point-A') }}">Poin A</a></li>
                            <li><a href="{{ route('point-B') }}">Poin B</a></li>
                            <li><a href="{{ route('point-C') }}">Poin C</a></li>
                            <li><a href="{{ route('point-D') }}">Poin D</a></li>
                            <li><a href="{{ route('point-E') }}">Poin E</a></li>
                            <li><a href="{{ route('raport', $user->id) }}">Raport</a></li>
                            @endif

                            {{-- ===============================
                            2. AKSES KHUSUS UNTUK JABSTRUK TERTENTU
                            =============================== --}}
                            @if (!empty($hasAllowedJabstruk))
                            <li><a href="{{ route('Point-A.data.search') }}">Search Poin A</a></li>
                            <li><a href="{{ route('Point-B.data.search') }}">Search Poin B</a></li>
                            <li><a href="{{ route('Point-C.data.search') }}">Search Poin C</a></li>
                            <li><a href="{{ route('Point-D.data.search') }}">Search Poin D</a></li>
                            <li><a href="{{ route('Point-E.data.search') }}">Search Poin E</a></li>
                            <li><a href="{{ route('raport.data.search') }}">Search Raport</a></li>
                            <li><a href="{{ route('rekap.index') }}">Search Rekap</a></li>
                            @endif

                        </ul>
                    </li>
                    @endif



                    {{-- IKTISAR App --}}
                    @if ($jabstrukNames)
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            {{-- <i class="fas fa-copy"></i> --}}
                            <span class="nav-text">IKTISAR</span>
                        </a>

                        <ul aria-expanded="false">

                            {{-- ================================
                            1. YAYASAN
                            ================================= --}}
                            @if (in_array('Yayasan PSDMIT', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">YAYASAN</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.ypsdmit.create') }}">Form Rektor</a>
                                    </li>
                                </ul>
                            </li>
                            @endif


                            {{-- ================================
                            2. REKTOR
                            ================================= --}}
                            @if (in_array('Rektor', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">REKTOR</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.rektor.create') }}">Form Wakil
                                            Rektor</a></li>
                                    <li><a href="{{ route('rektor.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif


                            {{-- ================================
                            3. WAREK I
                            ================================= --}}
                            @if (in_array('Wakil Rektor I', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">WAREK I</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.warekSatu.create') }}">Form Ka.
                                            Unit</a></li>
                                    <li><a href="{{ route('wareksatu.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif


                            {{-- ================================
                            4. WAREK II
                            ================================= --}}
                            @if (in_array('Wakil Rektor II', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">WAREK II</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.warekDua.create') }}">Form Ka.
                                            Unit</a></li>
                                    <li><a href="{{ route('warek-dua.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif


                            {{-- ================================
                            5. DEKAN & STAFF DEKAN
                            ================================= --}}
                            @if (in_array('Dekan Fakultas Kesehatan', $jabstrukNames)
                            || in_array('Dekan Fakultas Bisnis', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">DEKAN</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.dekan.create') }}">Form Ka. Unit</a>
                                    </li>
                                    <li><a href="{{ route('dekan.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif


                            {{-- ================================
                            5. SEKERTARIS PROGRAM STUDI
                            ================================= --}}
                            @if (in_array('Kepala Program Studi S1 Manajemen', $jabstrukNames)
                            || in_array('Kepala Program Studi S1 Akuntansi', $jabstrukNames)|| in_array( 'Kepala Program
                            Studi S1 Ilmu Gizi', $jabstrukNames)|| in_array('Kepala Program Studi S1 Keperawatan dan
                            Ners', $jabstrukNames)|| in_array('Kepala Program Studi D3 Kebidanan', $jabstrukNames))

                            <li><a class="has-arrow" href="javascript:void()">PROGRAM STUDI</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.sekkaprodi.create') }}">Form
                                            Penilaian Sekretaris Prodi</a>
                                    </li>
                                    <li><a href="{{ route('sekkaprodi.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif

                            {{-- ================================
                            9. BAU
                            ================================= --}}
                            @if (in_array('Kepala Riset dan Pengembangan', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">RISBANG</a>
                                <ul>
                                    <li><a href="{{ route('iktisar.bulanan.risbang.create') }}">Form Penilaian
                                            Lp2m</a></li>
                                    <li><a href="{{ route('risbang.data.rekap') }}">Rekap</a></li>
                                </ul>
                            </li>
                            @endif



                            {{-- ================================
                            6. MARKETING
                            ================================= --}}
                            @if (in_array('Kepala Marketing', $jabstrukNames))
                            <li><a class="has-arrow" href="javascript:void()">MARKETING</a>
                                <ul>
                                    <a href="{{ route('iktisar.bulanan.marketing.create') }}">Form Ka.
                                        Unit</a>
                            </li>
                            {{-- @if ($jabstruk->is_kepala)
                            <li>
                                @else
                            <li><a href="{{ route('iktisar.bulanan.marketing.staff.create') }}">Form
                                    Staff</a></li>
                            @endif --}}
                            <li><a href="{{ route('marketing.data.rekap') }}">Rekap</a></li>
                        </ul>
                    </li>
                    @endif


                    {{-- ================================
                    7. UPT — Kepala & Staff
                    ================================= --}}
                    @if (in_array('Kepala Unit Pelaksana Teknis', $jabstrukNames))
                    <li><a class="has-arrow" href="javascript:void()">UPT</a>
                        <ul>
                            <li><a href="{{ route('iktisar.bulanan.kaunit.create') }}">Form Ka.
                                    Unit</a></li>
                            <li><a href="{{ route('iktisar.bulanan.staff.create') }}">Form Staff</a>
                            </li>
                            <li><a href="{{ route('data.rekap') }}">Rekap</a></li>
                        </ul>
                    </li>
                    @endif


                    {{-- ================================
                    8. BAAK — Kepala & Staff
                    ================================= --}}
                    @if (in_array('Kepala Biro Administrasi Akademik', $jabstrukNames))
                    <li><a class="has-arrow" href="javascript:void()">BAAK</a>
                        <ul>
                            <li><a href="{{ route('iktisar.bulanan.baak.staff.create') }}">Form
                                    Staff</a></li>
                            {{-- @if ($jabstruk->name === 'Kepala Biro Administrasi Akademik')
                            <li><a href="{{ route('iktisar.bulanan.baak.kaunit.create') }}">Form
                                    Ka. Unit</a></li>
                            @else
                            @endif --}}

                            <li><a href="{{ route('baak.data.rekap') }}">Rekap</a></li>
                        </ul>
                    </li>
                    @endif


                    {{-- ================================
                    9. BAU
                    ================================= --}}
                    @if (in_array('Kepala Biro Administrasi Umum', $jabstrukNames))
                    <li><a class="has-arrow" href="javascript:void()">BAU</a>
                        <ul>
                            <li><a href="{{ route('iktisar.bulanan.bau.create') }}">Form Ka.
                                    Unit</a></li>
                            <li><a href="{{ route('bau.data.rekap') }}">Rekap</a></li>
                        </ul>
                    </li>
                    @endif


                    {{-- ================================
                    10. SUB BIRO UMUM — Kepala & Staff
                    ================================= --}}
                    @if (in_array('Kepala Subbagian Protokoler, Umum, dan Kepegawaian', $jabstrukNames))
                    <li><a class="has-arrow" href="javascript:void()">SUB BIRO UMUM</a>
                        <ul>
                            <li><a href="{{ route('iktisar.bulanan.hrd.create') }}">Form Staff</a>
                            </li>
                            <li><a href="{{ route('hrd.data.rekap') }}">Rekap</a></li>
                        </ul>
                    </li>
                    @endif

                </ul>
            </li>
            @endif

        </ul>
        </li>

        {{-- =================================== --}}
        {{-- Maintenance Menu --}}
        {{-- =================================== --}}
        @role('it|superuser|hrd')
        <li>
            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fas fa-cogs"></i>
                <span class="nav-text">Maintenance</span>
            </a>
            <ul aria-expanded="false">
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">Control Periode</a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('period.index') }}">Periode</a></li>
                        <li><a href="{{ route('closure.index') }}">Periode Penutupan</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">Control Jabatan dan Unit
                        Kerja</a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('jabfung.index') }}">Jabatan Fungsional</a></li>
                        <li><a href="{{ route('jabatan-struktural.index') }}">Jabatan Struktural</a></li>
                        <li><a href="{{ route('unit-kerja.index') }}">Unit Kerja</a></li>
                        <li><a href="{{ route('jabatan.pegawai.index') }}">Jabatan Pegawai</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('users.index') }}">User Management</a></li>
                        {{-- <li><a href="{{ route('jabatan.index') }}">Jabatan</a></li>
                        <li><a href="{{ route('user-jabatan.indexRoleJabatan') }}">Grafik Jabatan Pegawai</a></li> --}}

                        @role('it|superuser')
                        <li><a href="{{ route('role.index') }}">User Role</a></li>
                        <li><a href="{{ route('permission.index') }}">User Permission</a></li>
                        @endrole
                    </ul>
                </li>
                @role('it|superuser')
                <li><a href="{{ route('logactivity') }}">Activity Log</a></li>
                @endrole
            </ul>
        </li>
        @endrole

        </ul>

        {{-- =================================== --}}
        {{-- Profile Info --}}
        {{-- =================================== --}}
        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">
                    @if (Auth::user()->avatar)
                    <img src="{{ asset('/storage/photos/' . Auth::user()->avatar) }}" alt="User Avatar">
                    @else
                    <img src="{{ asset('Assets/images/undraw_profile.svg') }}" width="56" alt="Default Avatar">
                    @endif
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">{{ Auth::user()->name }}</h4>
                    <span>{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>

        {{-- =================================== --}}
        {{-- Copyright --}}
        {{-- =================================== --}}
        <div class="copyright">
            <p><strong>Institut Kesehatan dan Bisnis Surabaya</strong> © {{ date('Y') }} All Rights Reserved</p>
            <p class="fs-12">Made with by IKBIS</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
