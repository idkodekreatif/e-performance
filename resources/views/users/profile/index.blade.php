<x-app-layout title="Profile">
    @push('style')
    @endpush

    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
        </ol>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo rounded"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            <img src="{{ asset('/storage/photos/'. Auth::user()->avatar) }}"
                                class="img-fluid rounded-circle" alt="">
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h4 class="text-primary mb-0">{{ $data->name }}</h4>
                                @if ($data->fakultas == 'FK')
                                <span>
                                    <p>Fakultas Kesehatan</p>
                                </span>
                                @elseif ($data->fakultas == 'FB')
                                <span>
                                    <p>Fakultas Bisnis</p>
                                </span>
                                @endif
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-0">{{ $data->email }}</h4>
                                @if ($data->prodi == 'GZ')
                                <p>S1 Ilmu Gizi</p>
                                @elseif ($data->prodi == 'PR')
                                <p>S1 Ilmu Keperawatan</p>
                                @elseif ($data->prodi == 'BD')
                                <p>D3 Kebidanan</p>
                                @elseif ($data->prodi == 'MN')
                                <p>S1 Manajement</p>
                                @elseif ($data->prodi == 'MN')
                                <p>S1 Akuntansi</p>
                                @endif
                            </div>
                            <div class="dropdown ms-auto">
                                <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown"
                                    aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewbox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                        </g>
                                    </svg></a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i>
                                        Picture Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-statistics">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="m-b-0">150</h3>
                                            {{-- <span>Follower</span> --}}
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">140</h3>
                                            {{-- <span>Place Stay</span> --}}
                                        </div>
                                        <div class="col">
                                            <h3 class="m-b-0">45</h3>
                                            {{-- <span>Reviews</span> --}}
                                        </div>
                                    </div>
                                    {{-- <div class="mt-4">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a>
                                        <a href="javascript:void(0);" class="btn btn-primary mb-1"
                                            data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send Message</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-posts" data-bs-toggle="tab"
                                        class="nav-link active show">About Me</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab"
                                        class="nav-link">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-posts" class="tab-pane fade active show">
                                    <div class="profile-about-me">
                                        <div class="pt-4 border-bottom-1 pb-3">
                                            <h4 class="text-primary">About Me</h4>
                                            <p class="mb-2">{{ $data->about_me }}</p>
                                        </div>
                                    </div>
                                    <div class="profile-personal-info">
                                        <h4 class="text-primary mb-4">Personal Information</h4>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Name <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $data->name }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7"><span>{{ $data->email }}</span>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Fakultas <span class="pull-end">:</span></h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                @if ($data->fakultas == 'FK')
                                                <span>Fakultas Kesehatan</span>
                                                @elseif ($data->fakultas == 'FB')
                                                <span>Fakultas Bisnis</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-sm-3 col-5">
                                                <h5 class="f-w-500">Prodi <span class="pull-end">:</span>
                                                </h5>
                                            </div>
                                            <div class="col-sm-9 col-7">
                                                @if ($data->prodi == 'GZ')
                                                <span>S1 Ilmu Gizi</span>
                                                @elseif ($data->prodi == 'PR')
                                                <span>S1 Ilmu Keperawatan</span>
                                                @elseif ($data->prodi == 'BD')
                                                <span>D3 Kebidanan</span>
                                                @elseif ($data->prodi == 'MN')
                                                <span>S1 Manajement</span>
                                                @elseif ($data->prodi == 'MN')
                                                <span>S1 Akuntansi</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Update Data Diri --}}

                                <div id="profile-settings" class="tab-pane fade">

                                    <div class="my-post-content pt-3">
                                        <h4 class="text-primary">About Me</h4>
                                        <form action="{{ route('profile.update', Auth::id()) }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="post-input">
                                                <textarea name="about_me" id="textarea" cols="30" rows="5"
                                                    class="form-control bg-transparent"
                                                    placeholder="Please type what you want...."></textarea>

                                                <a href="javascript:void(0);" class="btn btn-primary light me-1 px-3"
                                                    data-bs-toggle="modal" data-bs-target="#cameraModal"><i
                                                        class="fa fa-camera m-0"></i> </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="cameraModal">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Upload images Profil</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Upload</span>
                                                                    <div class="form-file">
                                                                        <input type="file" name="avatar"
                                                                            class="form-file-input form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="pt-3">
                                                <div class="settings-form">
                                                    <h4 class="text-primary">Account Setting</h4>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" placeholder="Email" name="email"
                                                                value="{{ $data->email }}" class="form-control">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            {{-- <label class="form-label">Password</label>
                                                            <input type="password" placeholder="Password"
                                                                name="password" class="form-control"> --}}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Fakultas</label>
                                                            <div class="mb-3 mb-0">
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->fakultas == "FK" ? "checked"
                                                                    : ""}}
                                                                    name="fakultas" value="FK"> Fakultas
                                                                    Kesehatan</label>
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->fakultas == "FB" ? "checked"
                                                                    : ""}} value="FB"
                                                                    name="fakultas"> Fakultas Bisnis</label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Prodi</label>
                                                            <div class="mb-3 mb-0">
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        name="prodi" {{$data->prodi == "GZ" ? "checked"
                                                                    :
                                                                    ""}} value="GZ""> Prodi Gizi</label>
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->prodi == "PR" ? "checked" :
                                                                    ""}} value="PR"
                                                                    name="prodi"> Prodi Keperawatan</label>
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->prodi == "BD" ? "checked" :
                                                                    ""}} value="BD"
                                                                    name="prodi"> Prodi Kebidanan</label>
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->prodi == "MN" ? "checked" :
                                                                    ""}} value="MN"
                                                                    name="prodi"> Prodi Manajement</label>
                                                                <label class="radio-inline me-3"><input type="radio"
                                                                        {{$data->prodi == "AK" ? "checked" :
                                                                    ""}} value="AK"
                                                                    name="prodi"> Prodi Akuntansi</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="mb-3">
                                                        <label class="form-label">Fakultas</label>
                                                        <select class="default-select form-control wide mb-3">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Prodi</label>
                                                        <select class="default-select form-control wide mb-3">
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                    </div> --}}
                                                    <button class="btn btn-primary" type="submit">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('JavaScript')
    @endpush
</x-app-layout>
