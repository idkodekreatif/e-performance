<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('home') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            @role('it|superuser|manajer')
                <li>
                    <a class="has-arrow " href="javascript:void()" aria-expanded="false">
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


            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-clone"></i>
                    <span class="nav-text">Apps</span>
                </a>
                {{-- Start ITIKAD --}}
                @role('it|superuse|dosen|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi')
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ITIKAD</a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('point-A') }}">Poin A</a></li>
                                <li><a href="{{ route('point-B') }}">Poin B</a></li>
                                <li><a href="{{ route('point-C') }}">Poin C</a></li>
                                <li><a href="{{ route('point-D') }}">Poin D</a></li>
                                <li><a href="{{ route('point-E') }}">Poin E</a></li>
                                <li><a href="{{ route('raport', Auth::user()->id) }}">Raport</a></li>
                            </ul>
                        </li>
                    </ul>
                @endrole
                @role('it|superuse|hrd')
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">ITIKAD</a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('Point-A.data.search') }}">Search Poin A</a></li>
                                <li><a href="{{ route('Point-B.data.search') }}">Search Poin B</a></li>
                                <li><a href="{{ route('Point-C.data.search') }}">Search Poin C</a></li>
                                <li><a href="{{ route('Point-D.data.search') }}">Search Poin D</a></li>
                                <li><a href="{{ route('Point-E.data.search') }}">Search Poin E</a></li>
                                @role('it|superuse')
                                    <li><a href="javascript:void()">Search Rincian Poin</a></li>
                                    <li><a href="{{ route('raport.data.search') }}">Search Raport</a></li>
                                @endrole
                            </ul>
                        </li>
                    </ul>
                @endrole
                {{-- End ITIKAD --}}

                {{-- Start IKTISAR Tahunan --}}
                @role('it|superuser|warek2|upt|baak|keuangan|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi|bau|warek1|rektor|ypsdmit|hrd')
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">IKTISAR</a>
                            <ul aria-expanded="false">
                                {{-- Form Penilaian Yayasan dan Ka. Sub. Rektor --}}
                                @role('it|superuser|ypsdmit')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">YAYASAN</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('rektor') }}">Form Rektor</a></li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                    Bulanan</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('iktisar.bulanan.ypsdmit.create') }}">Form Rektor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    Rektor</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.rektor.warekSatu') }}">Warek I</a></li>
                                                    <li><a href="{{ route('searchRaport.warekDua') }}">Warek II</a></li>
                                                    <li><a href="{{ route('edit.StaffSusBidKerjasama') }}">StaffSus Bidang
                                                            Kerjasama</a></li>
                                                    <li><a href="{{ route('searchRaport.KaLpm') }}">Ka. Lembaga Penjamin
                                                            Mutu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Yayasan dan Ka. Sub. Rektor --}}

                                {{-- Form Penilaian Rektor dan Ka. Sub. Rektor --}}
                                @role('it|superuser|rektor')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">REKTOR</a>
                                        <ul aria-expanded="false">
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                    Bulanan</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('iktisar.bulanan.rektor.create') }}">Form Wakil
                                                            Rektor</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK I</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('warekSatu') }}">Form Warek I</a></li>
                                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka.
                                                            Sub. Warek I</a>
                                                        <ul aria-expanded="false">
                                                            <li><a
                                                                    href="{{ route('searchRaport.koorkemahasiswaanDanAlumni') }}">Koor.
                                                                    Kemahasiswaan & Alumni</a></li>
                                                            <li><a href="{{ route('searchRaport.WarekSatu.Ka.Upt') }}">Ka.
                                                                    UPT</a></li>
                                                            <li><a
                                                                    href="{{ route('searchRaport.WarekSatu.WarekSatu.Ka.Risbang') }}">Ka.
                                                                    Lem.
                                                                    Risbang</a></li>
                                                            <li><a href="{{ route('searchRaport.WarekSatu.Ka.Baak') }}">Ka.
                                                                    Baak</a>
                                                            </li>
                                                            <li><a href="{{ route('searchRaport.WarekSatu.Ka.Prodi') }}">Ka.
                                                                    Prodi</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('WarekDua') }}">Form Warek II</a></li>
                                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka.
                                                            Sub. Warek II</a>
                                                        <ul aria-expanded="false">
                                                            <li><a class="has-arrow" href="javascript:void()"
                                                                    aria-expanded="false">Ka. Sub. BAU</a>
                                                                <ul aria-expanded="false">
                                                                    <li><a
                                                                            href="{{ route('searchRaport.kasubBiroKepegawaian') }}">Ka.
                                                                            Sub Biro Kepegawaian</a></li>
                                                                    <li><a
                                                                            href="{{ route('searchRaport.KasubBiroKeuangan') }}">Ka.
                                                                            Sub. Biro Keuangan & Akuntant</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            {{-- <li><a href="{{ route('StaffSusBidKerjasama') }}">Form Staffsus Bidang
                                                    Kerjasama</a>
                                            </li> --}}

                                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('KaLpm') }}">Form Ka. Lembaga Penjaminan Mutu</a>
                                                    </li>
                                                    <li><a class="has-arrow" href="javascript:void()"
                                                            aria-expanded="false">Ka. Sub.
                                                            LPM</a>
                                                        <ul aria-expanded="false">
                                                            <li><a href="{{ route('searchRaport.Lpm') }}">Ka. Sub Lem.
                                                                    SPMI-SPME</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Rektor dan Ka. Sub. Rektor --}}

                                {{-- Penilaian Warek 1 dan Ka. Sub. Warek 1 --}}
                                @role('it|superuser|warek1')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK I</a>
                                        <ul aria-expanded="false">
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                    Bulanan</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('iktisar.bulanan.warekSatu.create') }}">Form Ka.
                                                            Unit</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            {{-- Input Form --}}
                                            <li><a href="{{ route('koorkemahasiswaanDanAlumni') }}">Form Koor. Kemahasiswaan &
                                                    Alumni</a></li>
                                            <li><a href="{{ route('WarekSatu.Ka.Upt') }}">Form Ka. UPT</a></li>
                                            <li><a href="{{ route('WarekSatu.Ka.Risbang') }}">Form Ka. Lem. Risbang</a></li>
                                            <li><a href="{{ route('WarekSatu.Ka.Baak') }}">Form Ka. Baak</a></li>
                                            <li><a href="{{ route('WarekSatu.Ka.Prodi') }}">Form Ka. Prodi</a></li>
                                            <li><a href="{{ route('KaLpm') }}">Form Ka. Lembaga Penjaminan Mutu</a>

                                                {{-- Search data kasub --}}
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    UPT</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.ka.perpustakaan') }}">Koordinator
                                                            Perpustakaan</a></li>
                                                    <li><a href="{{ route('searchRaport.kaLaboran') }}">Koordinator
                                                            Laboratorium</a>
                                                    </li>
                                                    <li><a href="{{ route('searchRaport.ka.it') }}">Ka. Unit IT</a></li>
                                                    <li><a class="has-arrow" href="javascript:void()"
                                                            aria-expanded="false">Unit
                                                            Pemasaran</a>
                                                        <ul aria-expanded="false">
                                                            <li><a href="{{ route('searchRaport.pemasaran') }}">Ka. Unit
                                                                    Pemasaran</a></li>
                                                            <li><a href="{{ route('searchRaport.staffpemasaran') }}">Staff
                                                                    Pemasaran</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    Risbang</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.KasubRisbang') }}">Ka. Sub. Lem. Penel
                                                            &
                                                            Pengmas</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    Baak</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.ka.baak') }}">Ka. Sub. Biro
                                                            Administrasi
                                                            Akademik</a></li>
                                                    <li><a href="{{ route('searchRaport.kemahasiswaan') }}">Staff
                                                            Kemahasiswaan</a>
                                                    </li>
                                                    <li><a href="{{ route('searchRaport.baakFkBisnis') }}">Staff BAAK Fakultas
                                                            Bisnis</a></li>
                                                    <li><a href="{{ route('searchRaport.staffbaaksatu') }}">Staff BAAK</a>
                                                    </li>
                                                    <li><a href="{{ route('searchRaport.staffbaakdua') }}">Staff BAAK</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    Prodi</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.sekKaprodi') }}">Sek Ka. Prodi</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    LPM</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.Lpm') }}">Ka. Sub Lem.
                                                            SPMI-SPME</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Warek 1 dan Ka. Sub. Warek 1 --}}

                                {{-- Penilaian Warek 2 dan Ka. Sub. Warek 2 --}}
                                @role('it|superuser|warek2')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                        <ul aria-expanded="false">
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                    Bulanan</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('iktisar.bulanan.warekDua.create') }}">Form Ka.
                                                            Unit</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('warek2.ka.bau') }}">Form Ka. Bau</a></li>
                                            <li><a href="{{ route('StaffSusBidKerjasama') }}">Form Staffsus Bidang
                                                    Kerjasama</a></li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub.
                                                    Bau</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('searchRaport.kasubBiroKepegawaian') }}">Ka. Sub
                                                            Biro
                                                            Kepegawaian</a></li>
                                                    <li><a href="{{ route('searchRaport.KasubBiroKeuangan') }}">Ka. Sub. Biro
                                                            Keuangan
                                                            & Akuntant</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Warek 2 dan Ka. Sub. Warek 2 --}}

                                {{-- Penilaian UPT --}}
                                @role('it|superuser|upt')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">UPT</a>
                                        <ul aria-expanded="false">
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                    Bulanan</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('iktisar.bulanan.kaunit.create') }}">Form Ka.
                                                            Unit</a></li>
                                                    <li><a href="{{ route('iktisar.bulanan.staff.create') }}">Form Staff</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('ka.upt.ka.unit.perpustakaan') }}">Form Koordinator
                                                    Perpustakaan</a></li>
                                            <li><a href="{{ route('ka.upt.ka.unit.laboran') }}">Form Koordinator
                                                    Laboratorium</a></li>
                                            <li><a href="{{ route('ka.upt.ka.unit.it') }}">Form Ka. Unit IT</a></li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Unit
                                                    Pemasaran</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('ka.upt.ka.unit.pemasaran') }}">Form Ka. Unit
                                                            Pemasaran</a></li>
                                                    <li><a href="{{ route('ka.StaffPemasaran') }}">Form Staff Pemasaran</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian UPT --}}

                                {{-- Penilaian Staff Baak --}}
                                @role('it|superuser|baak')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('ka.baak') }}">Form Ka. Sub. Biro Administrasi Akademik</a>
                                            </li>
                                            <li><a href="{{ route('kemahasiswaan') }}">Form Staff Kemahasiswaan</a></li>
                                            <li><a href="{{ route('baakFkBisnis') }}">Form Staff Baak Fakultas Bisnis</a></li>
                                            <li><a href="{{ route('staffbaaksatu') }}">Form Staff BAAK</a></li>
                                            <li><a href="{{ route('staffbaakdua') }}">Form Staff BAAK</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Baak --}}

                                {{-- Penilaian Staff Keuangan --}}
                                @role('it|superuser|keuangan')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KEUANGAN</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('StaffKeuangan') }}">Form Staff Keuangan</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Keuangan --}}

                                {{-- Penilaian Staff lpm --}}
                                @role('it|superuser|lpm')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('Lpm') }}">Form ka. Sub. Lem. SPMI-SPME</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff lpm --}}

                                {{-- Penilaian Staff Risbang --}}
                                @role('it|superuser|risbang')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">RISBANG</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('KasubRisbang') }}">Form Ka. Sub. Lem. Penel & Pengmas</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Risbang --}}

                                {{-- Penilaian Staff Prodi --}}
                                @role('it|superuser|gizi|perawat|bidan|manajemen|akuntansi')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KAPRODI</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('sekKaprodi') }}">Form Sek. Ka. Prodi</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Prodi --}}

                                {{-- Penilaian Staff Bau --}}
                                @role('it|superuser|bau')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAU</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('kasubBiroKepegawaian') }}">Form Ka. Sub Biro
                                                    Kepegawaian</a></li>
                                            <li><a href="{{ route('KasubBiroKeuangan') }}">Form Ka. Sub. Biro Keuangan &
                                                    Akuntant</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Bau --}}

                                {{-- Penilaian Staff Sub Biro Umum --}}
                                @role('it|superuser|hrd')
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">SUB BIRO UMUM</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('staffumum') }}">Form Staff Umum Dan Kepegawaian</a></li>
                                            <li><a href="{{ route('staffkebersihan') }}">Form Staff Kebersihan</a></li>
                                            <li><a href="{{ route('staffsecurity') }}">Form Staff Security</a></li>
                                            <li><a href="{{ route('staffsarpras') }}">Form Staff Srapras</a></li>
                                        </ul>
                                    </li>
                                @endrole
                                {{-- End Penilaian Staff Sub Biro Umum --}}

                            </ul>
                        </li>
                    </ul>
                @endrole
                {{-- End IKTISAR --}}

                {{-- Start IKTISAR Tendik --}}
                @role('it|superuser|tendik')
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">IKTISAR</a>
                            <ul aria-expanded="false">
                                {{-- Form Penilaian Yayasan dan Ka. Sub. Rektor --}}
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">YAYASAN</a>
                                    <ul aria-expanded="false">
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                Bulanan</a>
                                            <ul aria-expanded="false">
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.ypsdmit.raport.ypsdmit', Auth::user()->id) }}">Raport
                                                        Rektor</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('rektor.raport', Auth::user()->id) }}">Raport Rektor</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Yayasan dan Ka. Sub. Rektor --}}

                                {{-- Form Penilaian Rektor dan Ka. Sub. Rektor --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">REKTOR</a>
                                    <ul aria-expanded="false">
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                Bulanan</a>
                                            <ul aria-expanded="false">
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.rektor.raport.rektor', Auth::user()->id) }}">Raport
                                                        Ka. Unit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('warekSatu.raport', Auth::user()->id) }}"
                                                aria-expanded="false">Raport Warek I</a></li>
                                        <li><a href="{{ route('WarekDua.raport', Auth::user()->id) }}">Raport Warek
                                                II</a>
                                        </li>
                                        {{-- <li><a href="{{ route('StaffSusBidKerjasama.raport', Auth::user()->id) }}">Raport
                                                Staffsus Bidang Kerjasama</a></li> --}}
                                        {{-- <li><a href="{{ route('KaLpm.raport', Auth::user()->id) }}">Raport Ka. Lembaga
                                                Penjaminan Mutu</a></li> --}}
                                    </ul>
                                </li>
                                {{-- End Penilaian Rektor dan Ka. Sub. Rektor --}}

                                {{-- Penilaian Warek 1 dan Ka. Sub. Warek 1 --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK I</a>
                                    <ul aria-expanded="false">
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                Bulanan</a>
                                            <ul aria-expanded="false">
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.warekSatu.raport.warekSatu', Auth::user()->id) }}">Raport
                                                        Ka. Unit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('koorkemahasiswaanDanAlumni.raport', Auth::user()->id) }}"
                                                aria-expanded="false">Raport Koor. Kemahasiswaan & Alumni</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Upt.raport', Auth::user()->id) }}">Raport Ka.
                                                UPT</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Risbang.raport', Auth::user()->id) }}">Raport
                                                Ka. Lem. Risbang</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Baak.raport', Auth::user()->id) }}">Raport
                                                Ka.
                                                Baak</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Prodi.raport', Auth::user()->id) }}">Raport
                                                Ka. Prodi</a></li>
                                        <li><a href="{{ route('KaLpm.raport', Auth::user()->id) }}">Raport Ka. Lembaga
                                                Penjaminan Mutu</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Warek 1 dan Ka. Sub. Warek 1 --}}

                                {{-- Penilaian Warek 2 dan Ka. Sub. Warek 2 --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                    <ul aria-expanded="false">
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                Bulanan</a>
                                            <ul aria-expanded="false">
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.warekDua.raport.warekDua', Auth::user()->id) }}">Raport
                                                        Ka. Unit</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('warek2.ka.bau.raport', Auth::user()->id) }}">Raport Ka.
                                                Bau</a></li>
                                        <li><a href="{{ route('StaffSusBidKerjasama.raport', Auth::user()->id) }}">Raport
                                                Staffsus Bidang Kerjasama</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Warek 2 dan Ka. Sub. Warek 2 --}}

                                {{-- Penilaian UPT --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">UPT</a>
                                    <ul aria-expanded="false">
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Periode
                                                Bulanan</a>
                                            <ul aria-expanded="false">
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.kaunit.raport.kaunit', Auth::user()->id) }}">Raport
                                                        Ka. Unit</a></li>
                                                <li><a
                                                        href="{{ route('iktisar.bulanan.staff.raport.staff', Auth::user()->id) }}">Raport
                                                        Staff</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('ka.perpustakaan.raport', Auth::user()->id) }}">Raport
                                                Koordinator Perpustakaan</a></li>
                                        <li><a href="{{ route('ka.laboran.raport', Auth::user()->id) }}">Raport
                                                Koordinator Laboratorium</a></li>
                                        <li><a href="{{ route('ka.it.raport', Auth::user()->id) }}">Raport Ka. Unit
                                                IT</a>
                                        </li>
                                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Unit
                                                Pemasaran</a>
                                            <ul aria-expanded="false">
                                                <li><a href="{{ route('ka.pemasaran.raport', Auth::user()->id) }}">Raport
                                                        Ka. Unit Pemasaran</a></li>
                                                <li><a href="{{ route('StaffPemasaran.raport', Auth::user()->id) }}">Raport
                                                        Staff Pemasaran</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                {{-- End Penilaian UPT --}}

                                {{-- Penilaian Staff Baak --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('ka.baak.raport', Auth::user()->id) }}">Raport Ka. Sub.
                                                Biro
                                                Administrasi Akademik</a></li>
                                        <li><a href="{{ route('kemahasiswaan.raport', Auth::user()->id) }}">Raport
                                                Kemahasiswaan</a></li>
                                        <li><a href="{{ route('baakFkBisnis.raport', Auth::user()->id) }}">Raport Baak
                                                Fakultas Bisnis</a></li>
                                        <li><a href="{{ route('staffbaaksatu.raport', Auth::user()->id) }}">Raport Staff
                                                Baak</a></li>
                                        <li><a href="{{ route('staffbaakdua.raport', Auth::user()->id) }}">Raport Staff
                                                Baak</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Baak --}}

                                {{-- Penilaian Staff Keuangan --}}
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KEUANGAN</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('StaffKeuangan.raport', Auth::user()->id) }}">Raport Staff
                                                Keuangan</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Keuangan --}}

                                {{-- Penilaian Staff lpm --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('Lpm.raport', Auth::user()->id) }}">Raport Staff ka. Sub.
                                                Lem. SPMI-SPME</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff lpm --}}

                                {{-- Penilaian Staff Risbang --}}
                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">RISBANG</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('KasubRisbang.raport', Auth::user()->id) }}">Raport Ka.
                                                Sub.
                                                Lem. Penel & Pengmas</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Risbang --}}

                                {{-- Penilaian Staff Prodi --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KAPRODI</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('sekKaprodi.raport', Auth::user()->id) }}">Raport Sek. Ka.
                                                Prodi</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Prodi --}}

                                {{-- Penilaian Staff Bau --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAU</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('kasubBiroKepegawaian.raport', Auth::user()->id) }}">Raport
                                                Ka. Sub Biro Kepegawaian</a></li>
                                        <li><a href="{{ route('KasubBiroKeuangan.raport', Auth::user()->id) }}">Raport
                                                Ka.
                                                Sub. Biro Keuangan & Akuntant</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Bau --}}

                                {{-- Penilaian Staff Sub Biro Umum --}}

                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">SUB BIRO UMUM</a>
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('staffumum.raport', Auth::user()->id) }}">Raport Staff Umum
                                                Dan Kepegawaian</a></li>
                                        <li><a href="{{ route('staffkebersihan.raport', Auth::user()->id) }}">Raport
                                                Staff Kebersihan</a></li>
                                        <li><a href="{{ route('staffsecurity.raport', Auth::user()->id) }}">Raport Staff
                                                Security</a></li>
                                        <li><a href="{{ route('staffsarpras.raport', Auth::user()->id) }}">Raport Staff
                                                Srapras</a></li>
                                    </ul>
                                </li>
                                {{-- End Penilaian Staff Sub Biro Umum --}}

                            </ul>
                        </li>
                    </ul>
                @endrole
                {{-- End IKTISAR Tendik --}}
            </li>


            {{-- Menu Maintenance --}}
            @role('it|superuser|hrd')
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-info-circle"></i>
                        <span class="nav-text">Maintenain</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                            <ul aria-expanded="false">
                                @role('it|superuser|hrd')
                                    <li><a href="{{ route('users.index') }}">User Management</a></li>
                                @endrole
                                @role('it|superuser')
                                    <li><a href="{{ route('role.index') }}">User Role</a></li>
                                    <li><a href="{{ route('permission.index') }}">User Permission</a></li>
                                @endrole
                            </ul>
                        </li>
                        @role('it|superuser|hrd')
                            <li><a href="{{ route('Menu.Controller') }}">Pembaruan Data</a></li>
                        @endrole
                        @role('it|superuser')
                            <li><a href="{{ route('logactivity') }}">Activity Log</a></li>
                        @endrole
                    </ul>
                </li>
            @endrole
            {{-- End Menu Maintenance --}}
        </ul>
        <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">
                    @if (Auth::user()->avatar)
                        <img src="{{ asset('/storage/photos/' . Auth::user()->avatar) }}" alt="">
                    @else
                        <img src="{{ asset('Assets/images/profile/profile.png') }}" width="56" alt="">
                    @endif
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">{{ Auth::user()->name }}</h4>
                    <span>{{ Auth::user()->email }}</span>
                </div>
                <div class="profile-button">
                    {{-- <i class="fas fa-caret-down scale5 text-light"></i> --}}
                </div>
            </div>
        </div>
        <div class="copyright">
            <p><strong>Institut Kesehatan dan Bisnis Surabaya</strong> © {{ date('Y') }} All Rights Reserved</p>
            <p class="fs-12">Made with by IKBIS</p>
        </div>
    </div>
</div>
<!--**********************************
        Sidebar end
    ***********************************-->
