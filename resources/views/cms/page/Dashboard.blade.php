@extends('cms.layout.TemplateAdmin')
@section('content')
<div class="row">
    <div class="row">
        <!-- product profit start -->
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Data Guru</h6>
                            <h3 class="m-b-0 text-white">$1,783</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user text-c-red f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-blue">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Data Siswa</h6>
                            <h3 class="m-b-0 text-white">15,830</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users text-c-blue f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-green">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Fasilitas Sekolah</h6>
                            <h3 class="m-b-0 text-white">$6,780</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database text-c-green f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card prod-p-card bg-c-yellow">
                <div class="card-body">
                    <div class="row align-items-center m-b-25">
                        <div class="col">
                            <h6 class="m-b-5 text-white">Data Pendaftar</h6>
                            <h3 class="m-b-0 text-white">6,784</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users text-c-yellow f-18"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sessions-section start -->
        <div class="col-xl-8 col-md-6">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Data Siswa Baru</h5>
                </div>
                <div class="card-body px-0 py-0">
                    <div class="table-responsive">
                        <div class="session-scroll" style="height:478px;position:relative;">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>
                                        <th><span>Nomor Pendaftar</span></th>
                                        <th><span>Tanggal Daftar</span></th>
                                        <th><span>Nama Lengkap </span></th>
                                        <th><span>Alamat </span></th>
                                        <th><span>Status </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>8-8-2017</td>
                                        <td>78,3%
                                            <div class="progress mt-1" style="height:4px;">
                                                <div class="progress-bar bg-success rounded" role="progressbar"
                                                    style="width: 38%;" aria-valuenow="38" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>6,4%
                                            <div class="progress mt-1" style="height:4px;">
                                                <div class="progress-bar bg-info rounded" role="progressbar"
                                                    style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>9,45
                                            <div class="progress mt-1" style="height:4px;">
                                                <div class="progress-bar bg-danger rounded" role="progressbar"
                                                    style="width: 41%;" aria-valuenow="41" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>9:05
                                            <div class="progress mt-1" style="height:4px;">
                                                <div class="progress-bar bg-warning rounded" role="progressbar"
                                                    style="width: 67%;" aria-valuenow="67" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sessions-section end -->
        <div class="col-md-6 col-xl-4">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile Sekolah</h5>
                </div>
                <div class="card-body  text-center">
                    <div class="usre-image">
                        <img src="{{ asset('img/2.jpeg') }}" class="wid-100 m-auto" alt="User-Profile-Image"
                            style="width: 50%;">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10" id="profile">{{$data['profile'] ? $data['profile']->nama_sekolah :
                        ""}}</h6>
                    <p>{{$data['profile'] ? $data['profile']->nama_yayasan : ""}} | {{$data['profile'] ?
                        $data['profile']->status_sekolah : ""}} | {{$data['profile'] ? $data['profile']->telepon : ""}}
                    </p>
                    <hr>
                    <h6 class="f-w-600 m-t-25 m-b-10">Alamat</h6>
                    <p>{{$data['profile'] ? $data['profile']->alamat : ""}} | {{$data['profile'] ?
                        $data['profile']->desa : ""}} | {{$data['profile'] ? $data['profile']->kecamatan : ""}} |
                        {{$data['profile'] ? $data['profile']->provinsi : ""}}
                    </p>
                    <hr>
                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto">
                            @if ($data['profile'])
                            <button type="button" id="btn-edit"
                                data-id="{{$data['profile'] ? $data['profile']->id : ''}}"
                                class="btn btn-outline-success m-auto btn-md" data-toggle="modal"
                                data-target="#modalUniv">Ubah Profil</button>
                            @else
                            <button type="button" id="btn-input" class="btn btn-outline-primary m-auto btn-md"
                                data-toggle="modal" data-target="#modalUniv">Input Profil</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready( function () {
        const form = (data) => {
            $('#form-update').append(`
            <ol type="A">
                <li class="mt-3 mb-4">Identitas Sekolah
                    <div class="card-body px-0 py-0 mb-5">
                        <ol type="1" style="margin-left: -30px;">
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Sekolah</label>
                                    <div class="col-sm-8">
                                        <input type="hidden" class="form-control" name="id" value="${data ? data.id : ''}">
                                        <input type="text" class="form-control" name="nama_sekolah" value="${data ? data.nama_sekolah : ''}">
                                        <small class="text-danger" id="nama_sekolah-alert"></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="alamat"
                                            aria-label="With textarea">${data ? data.alamat : ''}</textarea>
                                        <small class="text-danger" id="alamat-alert"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Desa</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="desa" value="${data ? data.desa : ''}">
                                        <small class="text-danger" id="desa-alert"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kecamatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="kecamatan" value="${data ? data.kecamatan : ''}">
                                        <small class="text-danger" id="kecamatan-alert"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kabupaten</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="kabupaten" value="${data ? data.kabupaten : ''}">
                                        <small class="text-danger" id="kabupaten-alert"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Provinsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="provinsi" value="${data ? data.provinsi : ''}">
                                        <small class="text-danger" id="provinsi-alert"></small>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="telepon" value="${data ? data.telepon : ''}">
                                        <small class="text-danger" id="telepon-alert"></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Yayasan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_yayasan" value="${data ? data.nama_yayasan : ''}">
                                        <small class="text-danger" id="nama_yayasan-alert"></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Status Sekolah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="status_sekolah" value="${data ? data.status_sekolah : ''}">
                                        <small class="text-danger" id="status_sekolah-alert"></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Visi</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="visi"
                                            aria-label="With textarea">${data ? data.visi : ''}</textarea>
                                        <small class="text-danger" id="visi-alert"></small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Misi</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="misi"
                                            aria-label="With textarea">${data ? data.misi : ''}</textarea>
                                        <small class="text-danger" id="misi-alert"></small>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </li>
            </ol>
            `);
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#DataTable').DataTable();

        $(document).on('click', '#btn-input' , function() {
            $('.modal-title').html('Simpan Data');
            $('#form-update').html('');
            form(null);
            $('#modalUniv').modal('show');
        });
        $(document).on('click', '#btn-edit', function() {
            let _id = $(this).data('id');
            let url = `{{ config('app.url') }}/profile/data/${_id}`;

            $.get(url, function(result) {
                $('.modal-title').html('Ubah Data');
                $('#form-update').html('');
                form(result.data);
                $('#modalUniv').modal('show');
            });
        });

        $(document).on('click', '#btn-update', function() {
            let _id = $('input[name="id"]').val();
            let url = `{{ config('app.url') }}/profile`;
            let form = document.getElementById('form-update');
            let data = new FormData(form);

            $.ajax({
                type: "POST",
                url: url,
                data: data,
                processData: false,
                contentType: false,
                success: (result) => {
                    Swal.fire({
                        title: result.response.title,
                        text: result.response.message,
                        icon: result.response.icon,
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Oke'
                    }).then((result) => {
                        location.reload();
                    });
                },
                error: (err) => {
                    let data = err.responseJSON
                    let errorRes = data.errors
                    console.log(data)
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                    });
                    if (errorRes.length >= 1) {
                        $('.miniAlert').html('');
                        $.each(errorRes.data, function(i, value) {
                            $(`#${i}-alert2`).html(value);
                        });
                    }
                }
            });
        });
        
    } );
</script>
@endsection