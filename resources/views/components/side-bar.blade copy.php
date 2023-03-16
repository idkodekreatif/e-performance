<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('home') }}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            @role('it|superuser|manajer')
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('raport.chart') }}">Laporan Dosen</a>
                    </li>
                    <li>
                        <a href="{{ route('preview.point', Auth::user()->id) }}">Fiks Laporan preview</a>
                    </li>
                    @role('it')
                    <li>
                        <a href="{{ route('raport.chart.itisar') }}">Dev Laporan Tendik</a>
                    </li>
                    @endrole
                </ul>
            </li>
            @endrole

            @role('it|superuser|dosen|tendik|warek2|upt|baak|keuangan|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi|bau|warek1|rektor|ypsdmit|hrd')
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Forms</span>
                </a>
                @role('it|superuser|dosen|hrd')
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">ITIKAD</a>
                        @role('it|superuser|dosen|hrd')
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Insert Point</a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('point-A') }}">Point A</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('point-B') }}">Point B</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('point-C') }}">Point C</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('point-D') }}">Point D</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('point-E') }}">Point E</a>
                                    </li>
                                </ul>
                            </li>
                            @endrole
                            @role('it|superuser|hrd')
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Update Point</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('edit.Point-A', Auth::user()->id) }}">Point A</a></li>
                                    <li><a href="{{ route('edit.Point-B', Auth::user()->id) }}">Point B</a></li>
                                    <li><a href="{{ route('edit.Point-C', Auth::user()->id) }}">Point C</a></li>
                                    <li><a href="{{ route('edit.Point-D', Auth::user()->id) }}">Point D</a></li>
                                    <li><a href="{{ route('edit.Point-E', Auth::user()->id) }}">Point E</a></li>
                                </ul>
                            </li>
                            @endrole
                            <li><a href="{{ route('raport', Auth::user()->id) }}">Raport</a></li>
                        </ul>
                    </li>
                </ul>
                @endrole

                @role('it|superuser|tendik|warek2|upt|baak|keuangan|lpm|risbang|gizi|perawat|bidan|manajemen|akuntansi|bau|warek1|rektor|ypsdmit|hrd')
                <ul aria-expanded="false">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">IKTISAR</a>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">YAYASAN</a>
                                @role('it|superuser|ypsdmit')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('rektor') }}" aria-expanded="false">Form Rektor</a></li>
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub Rektor</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('warekSatu') }}" aria-expanded="false">Warek I</a></li>
                                            <li><a href="{{ route('WarekDua') }}">Warek II</a></li>
                                            <li><a href="{{ route('StaffSusBidKerjasama') }}">Staffsus Bidang Kerjasama</a></li>
                                            <li><a href="{{ route('KaLpm') }}">Ka. Lembaga Penjaminan Mutu</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @else
                            <ul aria-expanded="false">
                                <li><a href="{{ route('rektor.raport', Auth::user()->id) }}" aria-expanded="false">Raport Rektor</a></li>
                            </ul>
                            @endrole
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">REKTOR</a>
                                @role('it|superuser|rektor')
                                <ul aria-expanded="false">
                                    <li>
                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Warek I</a>
                                        <ul>
                                            <li><a href="{{ route('warekSatu') }}" aria-expanded="false">Form Warek I</a></li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Warek I</a>
                                                <ul aria-expanded="false">
                                                    <li>
                                                        <a href="{{ route('koorkemahasiswaanDanAlumni') }}" aria-expanded="false">Koor. Kemahasiswaan & Alumni</a>
                                                    </li>
                                                    <li>
                                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. UPT</a>
                                                            <ul>
                                                                <li><a href="{{ route('WarekSatu.Ka.Upt') }}">Ka. UPT</a></li>
                                                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. UPT</a>
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
                                                    </li>
                                                    <li>
                                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Lem. Risbang</a>
                                                        <ul>
                                                            <li><a href="{{ route('WarekSatu.Ka.Risbang') }}">Ka. Lem. Risbang</a></li>
                                                            <li>
                                                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Risbang</a>
                                                                <ul aria-expanded="false">
                                                                    <li>
                                                                        <a href="{{ route('KasubRisbang') }}" aria-expanded="false">Ka. Sub. Lem. Penel & Pengmas</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Baak</a>
                                                        <ul>
                                                            <li><a href="{{ route('WarekSatu.Ka.Baak') }}">Ka. Baak</a></li>
                                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. BAAK</a>
                                                                <ul aria-expanded="false">
                                                                    <li><a href="{{ route('kemahasiswaan') }}">Kemahasiswaan</a></li>
                                                                    <li><a href="{{ route('baakFkBisnis') }}">BAAK Bisnis</a></li>
                                                                    <li><a href="{{ route('staffbaaksatu') }}">BAAK 1</a></li>
                                                                    <li><a href="{{ route('staffbaakdua') }}">BAAK 2</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Prodi</a>
                                                        <ul>
                                                            <li><a href="{{ route('WarekSatu.Ka.Prodi') }}">Ka. Prodi</a></li>
                                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Prodi</a>
                                                                <ul aria-expanded="false">
                                                                    <li>
                                                                        <a href="{{ route('sekKaprodi') }}" aria-expanded="false">Sek Ka. Prodi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Warek II</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('WarekDua') }}">Form Warek II</a></li>
                                            <li>
                                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Bau</a>
                                                <ul>
                                                    <li><a href="{{ route('warek2.ka.bau') }}">Ka. Bau</a></li>
                                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. BAU</a>
                                                        <ul aria-expanded="false">
                                                            <li><a href="{{ route('kasubBiroKepegawaian') }}" aria-expanded="false">Ka. Sub Biro Kepegawaian</a></li>
                                                            <li><a href="{{ route('KasubBiroKeuangan') }}">Ka. Sub. Biro Keuangan & Akuntant</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('StaffSusBidKerjasama') }}">Staffsus Bidang Kerjasama</a></li>
                                    <li><a href="{{ route('KaLpm') }}">Ka. Lembaga Penjaminan Mutu</a></li>
                                </ul>
                                    @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('warekSatu.raport', Auth::user()->id) }}" aria-expanded="false">Raport Warek I</a></li>
                                    <li><a href="{{ route('WarekDua.raport', Auth::user()->id) }}">Raport Warek II</a></li>
                                    <li><a href="{{ route('StaffSusBidKerjasama.raport', Auth::user()->id) }}">Raport Staffsus Bidang Kerjasama</a></li>
                                    <li><a href="{{ route('KaLpm.raport', Auth::user()->id) }}">Raport Ka. Lembaga Penjaminan Mutu</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK I</a>
                                @role('it|superuser|warek1')
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('koorkemahasiswaanDanAlumni') }}" aria-expanded="false">Koor. Kemahasiswaan & Alumni</a>
                                    </li>

                                    <li>
                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. UPT</a>
                                            <ul>
                                                <li><a href="{{ route('WarekSatu.Ka.Upt') }}">Form Ka. UPT</a></li>
                                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. UPT</a>
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
                                    </li>

                                        <li>
                                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Lem. Risbang</a>
                                            <ul>
                                                <li><a href="{{ route('WarekSatu.Ka.Risbang') }}">Form Ka. Lem. Risbang</a></li>
                                                <li>
                                                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Risbang</a>
                                                    <ul aria-expanded="false">
                                                        <li>
                                                            <a href="{{ route('KasubRisbang') }}" aria-expanded="false">Ka. Sub. Lem. Penel & Pengmas</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Baak</a>
                                            <ul>
                                                <li><a href="{{ route('WarekSatu.Ka.Baak') }}">Form Ka. Baak</a></li>
                                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. BAAK</a>
                                                    <ul aria-expanded="false">
                                                        <li><a href="{{ route('kemahasiswaan') }}">Kemahasiswaan</a></li>
                                                        <li><a href="{{ route('baakFkBisnis') }}">BAAK Bisnis</a></li>
                                                        <li><a href="{{ route('staffbaaksatu') }}">BAAK 1</a></li>
                                                        <li><a href="{{ route('staffbaakdua') }}">BAAK 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Prodi</a>
                                            <ul>
                                                <li><a href="{{ route('WarekSatu.Ka.Prodi') }}">Form Ka. Prodi</a></li>
                                                <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. Prodi</a>
                                                    <ul aria-expanded="false">
                                                        <li>
                                                            <a href="{{ route('sekKaprodi') }}" aria-expanded="false">Sek Ka. Prodi</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    @else
                                    <ul aria-expanded="false">
                                        <li><a href="{{ route('koorkemahasiswaanDanAlumni.raport', Auth::user()->id) }}" aria-expanded="false">Raport Koor. Kemahasiswaan & Alumni</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Upt.raport', Auth::user()->id) }}">Raport Ka. UPT</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Risbang.raport', Auth::user()->id) }}">Raport Ka. Lem. Risbang</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Baak.raport', Auth::user()->id) }}">Raport Ka. Baak</a></li>
                                        <li><a href="{{ route('WarekSatu.Ka.Prodi.raport', Auth::user()->id) }}">Raport Ka. Prodi</a></li>
                                    </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">WAREK II</a>
                                @role('it|superuser|warek2')
                                <ul aria-expanded="false">
                                    <li>
                                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Bau</a>
                                        <ul>
                                            <li><a href="{{ route('warek2.ka.bau') }}">Form Ka. Bau</a></li>
                                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Sub. BAU</a>
                                                <ul aria-expanded="false">
                                                    <li><a href="{{ route('kasubBiroKepegawaian') }}" aria-expanded="false">Ka. Sub Biro Kepegawaian</a></li>
                                                    <li><a href="{{ route('KasubBiroKeuangan') }}">Ka. Sub. Biro Keuangan & Akuntant</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('warek2.ka.bau.raport', Auth::user()->id) }}">Raport Ka. Bau</a>
                                    </li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">UPT</a>
                                @role('it|superuser|upt')
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
                                @else
                                <ul aria-expanded="false">
                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Raport Unit Pemasaran</a>
                                        <ul aria-expanded="false">
                                            <li><a href="{{ route('ka.pemasaran.raport', Auth::user()->id) }}">Raport Ka. Unit Pemasaran</a></li>
                                            <li><a href="{{ route('StaffPemasaran.raport', Auth::user()->id) }}">Raport Staff Pemasaran</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('ka.perpustakaan.raport', Auth::user()->id) }}">Raport Koordinator Perpustakaan</a></li>
                                    <li><a href="{{ route('ka.laboran.raport', Auth::user()->id) }}">Raport Koordinator Laboratorium</a></li>
                                    <li><a href="{{ route('ka.it.raport', Auth::user()->id)}}">Raport Ka. Unit IT</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">BAAK</a>
                                @role('it|superuser|baak')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('ka.baak') }}" aria-expanded="false">Ka. Sub. Biro Administrasi Akademik</a></li>
                                    <li><a href="{{ route('kemahasiswaan') }}">Staff Kemahasiswaan</a></li>
                                    <li><a href="{{ route('baakFkBisnis') }}">Staff BAAK Fakultas Bisnis</a></li>
                                    <li><a href="{{ route('staffbaaksatu') }}">Staff BAAK</a></li>
                                    <li><a href="{{ route('staffbaakdua') }}">Staff BAAK</a></li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('ka.baak.raport', Auth::user()->id) }}" aria-expanded="false">Raport Ka. Sub. Biro Administrasi Akademik</a></li>
                                    <li><a href="{{ route('kemahasiswaan.raport', Auth::user()->id) }}">Raport Kemahasiswaan</a></li>
                                    <li><a href="{{ route('baakFkBisnis.raport', Auth::user()->id) }}">Raport BAAK Bisnis</a></li>
                                    <li><a href="{{ route('staffbaaksatu.raport', Auth::user()->id) }}">Raport Staff BAAK</a></li>
                                    <li><a href="{{ route('staffbaakdua.raport', Auth::user()->id) }}">Raport Staff BAAK 2</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KEUANGAN</a>
                                @role('it|superuser|keuangan')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('StaffKeuangan') }}" aria-expanded="false">Staff Keuangan</a></li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('StaffKeuangan.raport', Auth::user()->id) }}" aria-expanded="false">Raport Staff Keuangan</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">LPM</a>
                                @role('it|superuser|lpm')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('Lpm') }}" aria-expanded="false">Staff LPM</a></li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('Lpm.raport', Auth::user()->id) }}" aria-expanded="false">Raport Staff LPM</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Ka. Lem. RISBANG</a>
                                @role('it|superuser|risbang')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('KasubRisbang') }}" aria-expanded="false">Ka. Sub. Lem. Penel & Pengmas</a></li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('KasubRisbang.raport', Auth::user()->id) }}" aria-expanded="false">Raport Ka. Sub. Lem. Penel & Pengmas</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">KAPRODI</a>
                                @role('it|superuser|gizi|perawat|bidan|manajemen|akuntansi')
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('sekKaprodi') }}" aria-expanded="false">Sek Ka. Prodi</a>
                                    </li>
                                </ul>
                                    @else
                                <ul aria-expanded="false">
                                    <li>
                                        <a href="{{ route('sekKaprodi.raport', Auth::user()->id) }}" aria-expanded="false">Raport Sek Ka. Prodi</a>
                                    </li>
                                </ul>
                                @endrole
                            </li>
                        </ul>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">BAU</a>
                                @role('it|superuser|bau')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('kasubBiroKepegawaian') }}" aria-expanded="false">Ka. Sub Biro Kepegawaian</a></li>
                                    <li><a href="{{ route('KasubBiroKeuangan') }}">Ka. Sub. Biro Keuangan & Akuntant</a></li>
                                </ul>
                                    @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('kasubBiroKepegawaian.raport', Auth::user()->id) }}" aria-expanded="false">Raport Ka. Sub Biro Kepegawaian</a></li>
                                    <li><a href="{{ route('KasubBiroKeuangan.raport', Auth::user()->id) }}">Raport Ka. Sub. Biro Keuangan & Akuntant</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>

                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">SUB BIRO UMUM</a>
                                @role('it|superuser|hrd')
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('staffumum') }}" aria-expanded="false">Staff Umum Dan Kepegawaian</a></li>
                                    <li><a href="{{ route('staffkebersihan') }}">Staff Kebersihan</a></li>
                                    <li><a href="{{ route('staffsecurity') }}">Staff Security</a></li>
                                    <li><a href="{{ route('staffsarpras') }}">Staff Srapras</a></li>
                                </ul>
                                @else
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('staffumum.raport', Auth::user()->id) }}" aria-expanded="false">Raport Staff Umum Dan Kepegawaian</a></li>
                                    <li><a href="{{ route('staffkebersihan.raport', Auth::user()->id) }}">Raport Staff Kebersihan</a></li>
                                    <li><a href="{{ route('staffsecurity.raport', Auth::user()->id) }}">Raport Staff Security</a></li>
                                    <li><a href="{{ route('staffsarpras.raport', Auth::user()->id) }}">Raport Staff Srapras</a></li>
                                </ul>
                                @endrole
                            </li>
                        </ul>

                    </li>
                </ul>
                @endrole
            </li>
            @endrole

            @role('it|superuser')
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Point</a></li>
                    <li><a href="javascript:void()">Datatable</a></li>
                </ul>
            </li>
            @endrole

            @role('it|superuser|hrd')
            <li>
                <a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Maintenain</span>
                </a>
                <ul aria-expanded="false">
                    @role('it|superuser|hrd')
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">User Control</a>
                        <ul aria-expanded="false">
                            @role('it|superuser|hrd')
                            <li><a href="{{ route('users.index') }}">User Management</a></li>
                            @endrole
                            <li><a href="{{ route('role.index') }}">User Role</a></li>
                            <li><a href="{{ route('permission.index') }}">User Permission</a></li>
                        </ul>
                    </li>
                    @endrole
                    <li><a href="{{ route('logactivity') }}">Activity Log</a></li>
                    @role('it|superuser|hrd')
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Menu Control</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('Menu.Controller') }}">Menu Edit Point</a></li>
                        </ul>
                    </li>
                    @endrole
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
