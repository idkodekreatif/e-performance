<x-app-layout title="Admin">
    @push('style')
        <!-- Datatable -->
        <link href="{{ asset('Assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <!-- Custom Stylesheet -->
        <link href="{{ asset('Assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
    @endpush
    <div class="row page-titles shadow">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">User Management</a></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Control</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display yajra-datatable" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('JavaScript')
        <!-- Datatable -->
        <script src="{{ asset('Assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('Assets/js/plugins-init/datatables.init.js') }}"></script>
        <script type="text/javascript">
            $(function() {
                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.index') }}",
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
