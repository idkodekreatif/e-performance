<x-app-layout title="Logs Activity">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Maintenain</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Logs Activity</a></li>
        </ol>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Responsive Table</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table header-border table-responsive-sm">
                    <thead>
                        <tr>
                            <th>Log Name</th>
                            <th>Description</th>
                            <th>Properties</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($activity_log as $log)
                        <tr>
                            <td>{{ $log->log_name }}</td>
                            <td><span class="text-muted">{{ $log->description }}</span>
                            </td>
                            <td>
                                <textarea class="form-control"
                                    placeholder="Type your message...">{{ $log->properties }}</textarea>
                            </td>
                            {{-- <td><span class="badge badge-success">Paid</span>
                            </td> --}}
                            {{-- <td>EN</td> --}}
                            <td>{{ Carbon\Carbon::parse($log->created_at)->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
