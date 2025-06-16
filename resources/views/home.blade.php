<x-app-layout title="Welcome Dashboard">
    @push('style')
        <style>
            .dashboard-welcome {
                padding: 2rem;
            }

            .greeting-box {
                background: linear-gradient(135deg, #4e73df, #1cc88a);
                color: #fff;
                border-radius: 12px;
                padding: 2rem;
                text-align: center;
                margin-bottom: 2rem;
            }

            .greeting-box .time {
                font-size: 2rem;
                font-weight: 500;
            }

            .profile-info {
                margin-top: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 1rem;
            }

            .profile-info img {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                object-fit: cover;
            }

            .profile-info .name {
                font-weight: 600;
                font-size: 1.2rem;
            }

            .summary-card {
                border-radius: 10px;
                background-color: #f8f9fc;
                padding: 1rem 1.5rem;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
                text-align: center;
            }

            .summary-card h4 {
                font-size: 1.2rem;
                margin: 0.5rem 0;
            }

            .quick-links a {
                display: block;
                padding: 0.75rem 1rem;
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                text-align: center;
                text-decoration: none;
                color: #333;
                font-weight: 500;
                transition: all 0.3s ease;
            }

            .quick-links a:hover {
                background-color: #e2e6ea;
            }

            .quote-box {
                background-color: #ffffff;
                padding: 1.5rem;
                border-left: 5px solid #1cc88a;
                font-style: italic;
                margin-top: 2rem;
                border-radius: 8px;
            }
        </style>
    @endpush

    <div class="dashboard-welcome container-fluid">
        {{-- Greeting & Clock --}}
        <div class="greeting-box">
            <h2>Good Morning, {{ Auth::user()->name }} 👋</h2>
            <div class="time" id="clock">--:--:--</div>

            <div class="profile-info">
                <img src="{{ Auth::user()->profile_photo_url ?? asset('Assets/images/profile/profile.png') }}"
                    alt="User Photo">
                <div>
                    <div class="name">{{ Auth::user()->name }}</div>
                    <div class="text-light">{{ Auth::user()->email }}</div>
                </div>
            </div>
        </div>
        {{-- Komponen Nilai ITIKAD Rekap --}}
        @role('it|dosen')
            <div class="container my-5">
                <h4 class="mb-4">Persentase Penilaian Per Periode</h4>

                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle w-100">
                        <thead class="table-light">
                            <tr>
                                <th rowspan="2" style="vertical-align: middle; min-width: 60px;">#</th>
                                <th rowspan="2" class="text-start" style="vertical-align: middle; min-width: 250px;">
                                    Komponen ITIKAD</th>
                                <th colspan="{{ count($periods) }}">Persentase Penilaian</th>
                            </tr>
                            <tr>
                                @foreach ($periods as $period)
                                    <th style="min-width: 150px;">{{ $period->name ?? 'Periode ' . $period->id }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Komponen A --}}
                            <tr>
                                <td><strong>A.</strong></td>
                                <td class="text-start">PENDIDIKAN DAN PENGAJARAN</td>
                                @foreach ($periods as $period)
                                    <td>{{ number_format($resultArray[$period->id]['NtAFinalSum'] ?? 0, 2, ',', '.') }}%
                                    </td>
                                @endforeach
                            </tr>

                            {{-- Komponen B --}}
                            <tr>
                                <td><strong>B.</strong></td>
                                <td class="text-start">PENELITIAN DAN KARYA ILMIAH</td>
                                @foreach ($periods as $period)
                                    <td>{{ number_format($resultArray[$period->id]['NTiFinalSum'] ?? 0, 2, ',', '.') }}%
                                    </td>
                                @endforeach
                            </tr>

                            {{-- Komponen C --}}
                            <tr>
                                <td><strong>C.</strong></td>
                                <td class="text-start">PENGABDIAN KEPADA MASYARAKAT</td>
                                @foreach ($periods as $period)
                                    <td>{{ number_format($resultArray[$period->id]['NTiFinalSumPkm'] ?? 0, 2, ',', '.') }}%
                                    </td>
                                @endforeach
                            </tr>

                            {{-- Komponen D dan E --}}
                            <tr>
                                <td><strong>D & E</strong></td>
                                <td class="text-start">UNSUR PENUNJANG, PENGABDIAN INSTITUSI, DAN PENGEMBANGAN DIRI</td>
                                @foreach ($periods as $period)
                                    <td>{{ number_format($resultArray[$period->id]['SUMUnsurPenungjang'] ?? 0, 2, ',', '.') }}%
                                    </td>
                                @endforeach
                            </tr>

                            {{-- TOTAL --}}
                            <tr class="table-secondary fw-bold">
                                <td colspan="2" class="text-start">PERSENTASE CAPAIAN TOTAL</td>
                                @foreach ($periods as $period)
                                    <td>{{ number_format($resultArray[$period->id]['averageFinalScore'] ?? 0, 2, ',', '.') }}%
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endrole

        {{-- Summary Cards --}}
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="summary-card">
                    <h2>120</h2>
                    <h4>Total Employees</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="summary-card">
                    <h2>95%</h2>
                    <h4>Attendance Today</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="summary-card">
                    <h2>14</h2>
                    <h4>Active Evaluations</h4>
                </div>
            </div>
        </div>

        {{-- Quick Links --}}
        <div class="row quick-links mb-4">
            <div class="col-md-4 mb-2">
                <a href="{{ route('profile.index') }}">👤 My Profile</a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="">🕒 Attendance</a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="{{ route('raport.chart') }}">📊 Performance Review</a>
            </div>
        </div>

        {{-- Motivational Quote --}}
        <div class="quote-box">
            “The only way to do great work is to love what you do.” – Steve Jobs
        </div>
    </div>

    @push('JavaScript')
        <script>
            function updateClock() {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
            }

            setInterval(updateClock, 1000);
            updateClock();
        </script>
    @endpush
</x-app-layout>
