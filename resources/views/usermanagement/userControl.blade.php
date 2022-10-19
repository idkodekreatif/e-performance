<x-app-layout title="User Control Management">
    @push('style')
    <!-- Datatable -->
    <link href="{{ asset('Assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('Assets/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('Assets/css/style.css') }}" rel="stylesheet">
    @endpush

    <div class="col-xl col-lg">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Maintenain</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User Control</a></li>
            </ol>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Management Control</h4>
            </div>
            <div class="card-body">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Profile</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Role Name</th>
                            <th>Modify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ashton Cox</td>
                            <td><img class="rounded-circle" width="35"
                                    src="{{ asset('Assets/images/profile/small/pic3.jpg') }}" alt=""></td>
                            <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                            <td>2009/01/12</td>
                            <td>
                                <span class="badge light badge-danger">
                                    <i class="fa fa-circle text-danger me-1"></i>
                                    New Patient
                                </span>
                            </td>
                            <td>
                                <span class="badge light badge-danger">
                                    <i class="fa fa-circle text-danger me-1"></i>
                                    New Patient
                                </span>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                            class="fas fa-user-plus"></i></a>
                                    <a href="#" class="btn btn-warning shadow btn-xs sharp me-1"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                            class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('JavaScript')
    <!-- Datatable -->
    <script src="{{ asset('Assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Assets/js/plugins-init/datatables.init.js') }}"></script>
    <script src="{{ asset('Assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('Assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('Assets/js/dlabnav-init.js') }}"></script>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>
    @endpush
</x-app-layout>
