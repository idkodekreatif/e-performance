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
                    @role('it|superuser|dosen|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi|hrd|lppm')
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">ITIKAD</a>
                            <ul aria-expanded="false">
                                {{-- User Form Entry --}}
                                @role('it|superuser|dosen|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi')
                                    <li><a href="{{ route('point-A') }}">Poin A</a></li>
                                    <li><a href="{{ route('point-B') }}">Poin B</a></li>
                                    <li><a href="{{ route('point-C') }}">Poin C</a></li>
                                    <li><a href="{{ route('point-D') }}">Poin D</a></li>
                                    <li><a href="{{ route('point-E') }}">Poin E</a></li>
                                    <li><a href="{{ route('raport', Auth::user()->id) }}">Raport</a></li>
                                @endrole

                                {{-- Admin/HRD Search --}}
                                @role('it|superuser|hrd')
                                    <li><a href="{{ route('Point-A.data.search') }}">Search Poin A</a></li>
                                    <li><a href="{{ route('Point-B.data.search') }}">Search Poin B</a></li>
                                    <li><a href="{{ route('Point-C.data.search') }}">Search Poin C</a></li>
                                    <li><a href="{{ route('Point-D.data.search') }}">Search Poin D</a></li>
                                    <li><a href="{{ route('Point-E.data.search') }}">Search Poin E</a></li>
                                    <li><a href="{{ route('raport.data.search') }}">Search Raport</a></li>
                                    <li><a href="{{ route('rekap.index') }}">Search Rekap</a></li>
                                    @role('it|superuser')
                                        <li><a href="javascript:void()">Search Rincian Poin</a></li>
                                    @endrole
                                @endrole

                                {{-- Specific Unit Search --}}
                                @role('it|superuser|risbang|lppm')
                                    <li><a href="{{ route('Point-B.data.search') }}">Search Poin B</a></li>
                                    <li><a href="{{ route('Point-C.data.search') }}">Search Poin C</a></li>
                                @endrole
                            </ul>
                        </li>
                    @endrole

                    {{-- IKTISAR App --}}
                    @role('it|superuser|warek2|upt|baak|keuangan|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi|bau|warek1|rektor|ypsdmit|hrd|kasubbaak|dekan|marketing|tendik')
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">IKTISAR</a>
                            <ul aria-expanded="false">

                                {{-- --------------------------------- --}}
                                {{-- Assessor Menu (Forms & Rekap) --}}
                                {{-- --------------------------------- --}}

                                {{-- YAYASAN --}}
                                @role('it|superuser|ypsdmit')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">YAYASAN</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.ypsdmit.create') }}">Form Rektor</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- REKTOR --}}
                                @role('it|superuser|rektor')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">REKTOR</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.rektor.create') }}">Form Wakil Rektor</a></li>
                                            <li><a href="{{ route('rektor.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- WAREK I --}}
                                @role('it|superuser|warek1')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK I</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.warekSatu.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('wareksatu.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- WAREK II --}}
                                @role('it|superuser|warek2')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.warekDua.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('warek-dua.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- DEKAN --}}
                                @role('it|superuser|dekan')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">DEKAN</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.dekan.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('dekan.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- MARKETING --}}
                                @role('it|superuser|marketing')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">MARKETING</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.marketing.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('marketing.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- UPT --}}
                                @role('it|superuser|upt')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">UPT</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.kaunit.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.staff.create') }}">Form Staff</a></li>
                                            <li><a href="{{ route('data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- BAAK --}}
                                @role('it|superuser|baak')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.baak.kaunit.create') }}">Form Ka. Unit</a></li>
                                            <li><a href="{{ route('baak.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- KEUANGAN --}}
                                @role('it|superuser|keuangan')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KEUANGAN</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.keuangan.create') }}">Form Staff Keungan</a></li>
                                            <li><a href="{{ route('keuangan.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- LPM --}}
                                @role('it|superuser|lpm')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.lpm.create') }}">Form Ka. unit</a></li>
                                            <li><a href="{{ route('lpm.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- RISBANG --}}
                                @role('it|superuser|risbang')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">RISBANG</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.risbang.create') }}">Form Ka. unit</a></li>
                                            <li><a href="{{ route('risbang.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- KAPRODI --}}
                                @role('it|superuser|gizi|perawat|bidan|manajemen|akuntansi')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KAPRODI</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.sekkaprodi.create') }}">Form Ka. unit</a></li>
                                            <li><a href="{{ route('sekkaprodi.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- BAU --}}
                                @role('it|superuser|bau')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAU</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.bau.create') }}">Form Ka. unit</a></li>
                                            <li><a href="{{ route('bau.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole

                                {{-- SUB BIRO UMUM (HRD) --}}
                                @role('it|superuser|hrd')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">SUB BIRO UMUM</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.hrd.create') }}">Form Staff</a></li>
                                            <li><a href="{{ route('hrd.data.rekap') }}">Rekap</a></li>
                                        </ul>
                                    </li>
                                @endrole


                                {{-- --------------------------------- --}}
                                {{-- Tendik Menu (Raports) --}}
                                {{-- --------------------------------- --}}
                                @role('tendik')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Raport Saya</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('iktisar.bulanan.ypsdmit.raport.ypsdmit', Auth::user()->id) }}">Raport (dari Yayasan)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.rektor.raport.rektor', Auth::user()->id) }}">Raport (dari Rektor)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.warekSatu.raport.warekSatu', Auth::user()->id) }}">Raport (dari Warek I)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.warekDua.raport.warekDua', Auth::user()->id) }}">Raport (dari Warek II)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.dekan.raport.dekan', Auth::user()->id) }}">Raport (dari Dekan)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.kaunit.raport.kaunit', Auth::user()->id) }}">Raport Ka. Unit (dari UPT)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.staff.raport.staff', Auth::user()->id) }}">Raport Staff (dari UPT)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.baak.kaunit.raport.baak', Auth::user()->id) }}">Raport Ka. Unit (dari BAAK)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.baak.staff.raport.baak', Auth::user()->id) }}">Raport Staff (dari BAAK)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.keuangan.raport.keuangan', Auth::user()->id) }}">Raport (dari Keuangan)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.lpm.raport.lpm', Auth::user()->id) }}">Raport (dari LPM)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.risbang.raport.risbang', Auth::user()->id) }}">Raport (dari Risbang)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.sekkaprodi.raport.sekkaprodi', Auth::user()->id) }}">Raport (dari Kaprodi)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.bau.raport.bau', Auth::user()->id) }}">Raport (dari BAU)</a></li>
                                            <li><a href="{{ route('iktisar.bulanan.hrd.raport.hrd', Auth::user()->id) }}">Raport (dari Sub Biro Umum)</a></li>
                                        </ul>
                                    </li>
                                @endrole

                            </ul>
                        </li>
                    @endrole
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
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('users.index') }}">User Management</a></li>
                                <li><a href="{{ route('jabatan.index') }}">Jabatan</a></li>
                                <li><a href="{{ route('user-jabatan.indexRoleJabatan') }}">Jabatan Pegawai</a></li>
                                <li><a href="{{ route('jabfung.index') }}">Jabatan Fungsional</a></li>
                                <li><a href="{{ route('jabatan-struktural.index') }}">Jabatan Struktural</a></li>
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
