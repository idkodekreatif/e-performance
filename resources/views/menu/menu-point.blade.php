<x-app-layout title="Menu Controller">
    @push('style')
    @endpush
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Maintenain</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Menu Control</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Control Menu Edit</a></li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Control Menu</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">

                @if (empty($data))
                <form action="{{ route('Menu.Store') }}" method="POST">
                    @csrf
                    <label for="">Menu Point Insert</label>
                    <select class="default-select form-control wide" name="MenuPoint">
                        <option>--- Selected ---</option>
                        <option value="0">Disable</option>
                        <option value="1">Active</option>
                    </select>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-sm mt-2 float-end">Simpan</button>
                        </div>
                    </div>
                </form>
                @elseif ($data->control_menu == 0 || 1)
                <form action="{{ route('Menu.Update', [$data->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <label for="">Menu Point Update</label>
                    <select class="default-select form-control wide" name="MenuPoint">
                        <option value="0" {{$data->control_menu == "0" ? "selected" : ""}}>Disable</option>
                        <option value="1" {{$data->control_menu == "1" ? "selected" : ""}}>Active</option>
                    </select>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-sm mt-2 float-end">Simpan</button>
                        </div>
                    </div>
                </form>

                @endif
            </div>
        </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
